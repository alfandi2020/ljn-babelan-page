<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('M_Auth');
        $this->load->model('M_Faq');

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
            'title' => 'FAQ',
            'pages' => 'dashboard/pages/faq/v_faq',
            'faq' => $this->M_Faq->lists(),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add FAQ',
            'pages' => 'dashboard/pages/faq/v_create',
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function store()
    {
        // echo "halo";
        // exit;
        $user_id = $this->session->userdata('user_id');
        $pertanyaan_id = trim($this->input->post('pertanyaan_id'));
        $pertanyaan_en = trim($this->input->post('pertanyaan_en'));
        $pertanyaan_jp = trim($this->input->post('pertanyaan_jp'));
        $jawaban_id = trim($this->input->post('jawaban_id'));
        $jawaban_en = trim($this->input->post('jawaban_en'));
        $jawaban_jp = trim($this->input->post('jawaban_jp'));

        // pembuatan slug dari nama produk
        $out = explode(" ", $pertanyaan_id);
        $slug = preg_replace("/[^A-Za-z0-9\-]/", "", strtolower(implode("-", $out)));

        $now = date('Y-m-d H:i:s');

        $old_slug = $this->uri->segment(4);

        if ($old_slug) {

            $data = [
                'question_id' => $pertanyaan_id,
                'question_en' => $pertanyaan_en,
                'question_jp' => $pertanyaan_jp,
                'answer_id' => $jawaban_id,
                'answer_en' => $jawaban_en,
                'answer_jp' => $jawaban_jp,
                'slug' => trim($slug),
            ];

            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            // exit;

            $this->M_Faq->update_faq($data, $old_slug);
        } else {
            $data = [
                'question_id' => $pertanyaan_id,
                'question_en' => $pertanyaan_en,
                'question_jp' => $pertanyaan_jp,
                'answer_id' => $jawaban_id,
                'answer_en' => $jawaban_en,
                'answer_jp' => $jawaban_jp,
                'slug' => trim($slug),
                'created_at' => $now,
                'created_by' => $user_id,
            ];
            $this->M_Faq->add_faq($data);
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit faq',
            'pages' => 'dashboard/pages/faq/v_create',
            'faq' => $this->M_Faq->detail_faq($id),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];

        $this->load->view('dashboard/index', $data);
    }
}
