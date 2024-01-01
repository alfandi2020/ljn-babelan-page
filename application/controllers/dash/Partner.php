<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('M_Auth');
        $this->load->model('M_Partner');

        if (!$this->session->userdata('is_logged_in')) {

            $this->session->set_flashdata('message_name', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			You have to login first.
			<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
			</div>');
            redirect('auth');
        } else {
            if ($this->session->userdata('role_id') == "2") {
                redirect('/');
            }
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Partner',
            'pages' => 'dashboard/pages/partner/v_partner',
            'partners' => $this->M_Partner->lists(),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add partner',
            'pages' => 'dashboard/pages/partner/v_create',
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function store()
    {
        $user_id = $this->session->userdata('user_id');
        $nama_partner = trim($this->input->post('nama_partner'));

        // pembuatan slug dari nama produk
        $out = explode(" ", $nama_partner);
        $slug = preg_replace("/[^A-Za-z0-9\-]/", "", strtolower(implode("-", $out)));

        $now = date('Y-m-d H:i:s');

        $old_slug = $this->uri->segment(4);

        if ($old_slug) {

            $data = [
                'nama_partner' => $nama_partner,
                'slug' => trim($slug),
            ];
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            // exit;

            $this->M_Partner->update_partner($data, $old_slug);
        } else {
            $data = [
                'nama_partner' => $nama_partner,
                'slug' => trim($slug),
                'created_at' => $now,
                'created_by' => $user_id,
            ];
            $this->M_Partner->add_partner($data);
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit partner',
            'pages' => 'dashboard/pages/partner/v_create',
            'partner' => $this->M_Partner->detail_partner($id),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];

        $this->load->view('dashboard/index', $data);
    }
}
