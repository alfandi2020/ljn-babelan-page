<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('M_Auth');
        $this->load->model('M_Program');

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
            'title' => 'Program',
            'pages' => 'dashboard/pages/program/v_program',
            'programs' => $this->M_Program->list_dashboard(),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Program',
            'pages' => 'dashboard/pages/program/v_create',
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function store()
    {
        $user_id = $this->session->userdata('user_id');
        $nama_program_id = trim($this->input->post('nama_program_id'));
        $nama_program_en = trim($this->input->post('nama_program_en'));
        $nama_program_jp = trim($this->input->post('nama_program_jp'));

        // pembuatan slug dari nama produk
        $out = explode(" ", $nama_program_id);
        $slug = preg_replace("/[^A-Za-z0-9\-]/", "", strtolower(implode("-", $out)));

        $now = date('Y-m-d H:i:s');

        $old_slug = $this->uri->segment(4);

        if ($old_slug) {

            $data = [
                'nama_program_id' => $nama_program_id,
                'nama_program_en' => $nama_program_en,
                'nama_program_jp' => $nama_program_jp,
                'keterangan_id' => trim($this->input->post('keterangan_program_id')),
                'keterangan_en' => trim($this->input->post('keterangan_program_en')),
                'keterangan_jp' => trim($this->input->post('keterangan_program_jp')),
                'content_id' => trim($this->input->post('content_id')),
                'content_en' => trim($this->input->post('content_en')),
                'content_jp' => trim($this->input->post('content_jp')),
                'slug' => trim($slug),
                'updated_at' => $now,
                'updated_by' => $user_id
            ];

            $this->M_Program->update_program($data, $old_slug);
        } else {

            $photo = $_FILES['program_photo']['name']; // Nama file 

            // Mendapatkan extension
            $pathInfo = pathinfo($photo);
            $extension = $pathInfo['extension']; // Extension file
            $newPhotoFileName = $slug . '.' . $extension;

            $data = [
                'nama_program_id' => $nama_program_id,
                'nama_program_en' => $nama_program_en,
                'nama_program_jp' => $nama_program_jp,
                'keterangan_id' => trim($this->input->post('keterangan_program_id')),
                'keterangan_en' => trim($this->input->post('keterangan_program_en')),
                'keterangan_jp' => trim($this->input->post('keterangan_program_jp')),
                'content_id' => trim($this->input->post('content_id')),
                'content_en' => trim($this->input->post('content_en')),
                'content_jp' => trim($this->input->post('content_jp')),
                'photo' => $newPhotoFileName,
                'slug' => trim($slug),
                'created_at' => $now,
                'created_by' => $user_id,
            ];
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            // exit;

            $this->M_Program->add_program($data);
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit program',
            'pages' => 'dashboard/pages/program/v_create',
            'program' => $this->M_Program->detail_program_edit($id),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];

        $this->load->view('dashboard/index', $data);
    }
}
