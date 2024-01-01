<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('M_Auth');
        $this->load->model('M_Setting');

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
            'title' => 'Setting',
            'pages' => 'dashboard/pages/settings/v_settings',
            'videotron' => $this->M_Setting->videotron(),
            'visi' => $this->M_Setting->setting('visi'),
            'misi' => $this->M_Setting->setting('misi'),
            'alamat' => $this->M_Setting->setting('alamat'),
            'telepon' => $this->M_Setting->setting('telepon'),
            'email' => $this->M_Setting->setting('email'),
            'categories' => $this->M_Setting->category(),
            'contact' => $this->M_Setting->chat(),
            'social' => $this->M_Setting->social_media(),
            'legalitas' => $this->M_Setting->setting('legalitas'),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function update_videotron($id)
    {

        $now = date('Y-m-d H:i:s');

        // Mendapatkan extension
        $video_name = "videotron";

        $video = $_FILES['input_videotron']['name']; // Nama file 

        // Mendapatkan extension
        $pathInfo = pathinfo($video);
        $extension = $pathInfo['extension']; // Extension file
        $newVIdeoFileName = $video_name . '.' . $extension;
        $data = array(
            'content_id' => $newVIdeoFileName,
            'updated_at' => $now
        );

        $this->M_Setting->update_videotron($data, $id);
    }

    public function update_visimisi()
    {
        $now = date('Y-m-d H:i:s');

        $data_visi = array(
            'content_id' => trim($this->input->post('visi_id')),
            'content_en' => trim($this->input->post('visi_en')),
            'content_jp' => trim($this->input->post('visi_jp')),
            'updated_at' => $now
        );

        $data_misi = array(
            'content_id' => trim($this->input->post('misi_id')),
            'content_en' => trim($this->input->post('misi_en')),
            'content_jp' => trim($this->input->post('misi_jp')),
            'updated_at' => $now
        );

        $this->M_Setting->update_visimisi($data_visi, $data_misi);
    }

    public function update_contact()
    {
        $now = date('Y-m-d H:i:s');

        $data_alamat = array(
            'content_id' => trim($this->input->post('alamat')),
            'updated_at' => $now
        );

        $telepon = $this->input->post('telepon');
        $telepon_name = trim(preg_replace(["/<p>/", "/<\/p>/"], ["", "<br>"], $telepon));

        $data_telepon = array(
            'content_id' => $telepon_name,
            'updated_at' => $now
        );

        $email = $this->input->post('email');
        $email_name = trim(preg_replace(["/<p>/", "/<\/p>/"], ["", "<br>"], $email));

        $data_email = array(
            'content_id' => $email_name,
            'updated_at' => $now
        );

        $this->M_Setting->update_contact($data_alamat, $data_telepon, $data_email);
    }

    public function add_category()
    {
        $user_id = $this->session->userdata('user_id');

        $category_name = trim($this->input->post('category_name'));

        // pembuatan slug dari nama produk
        $out = explode(" ", $category_name);
        $slug = preg_replace("/[^A-Za-z0-9\-]/", "", strtolower(implode("-", $out)));

        $now = date('Y-m-d H:i:s');

        $data = [
            'category_name' => $category_name,
            'slug' => trim($slug),
            'created_at' => $now,
            'created_by' => $user_id,
        ];
        $this->M_Setting->add_category($data);
    }

    public function add_contact()
    {
        $user_id = $this->session->userdata('user_id');

        $contact_name = trim($this->input->post('contact_name'));
        $sosmed_category = trim($this->input->post('sosmed_category'));
        $sosmed = $this->M_Setting->detail_social_media($sosmed_category);

        // pembuatan slug dari nama produk
        $out = explode(" ", $contact_name);
        $slug = preg_replace("/[^A-Za-z0-9\-]/", "", strtolower(implode("-", $out))) . '-' . strtolower($sosmed[0]->name);

        $now = date('Y-m-d H:i:s');
        $old_slug = $this->uri->segment(4);

        if ($old_slug) {

            $data = [
                'contact_name' => $contact_name,
                'slug' => trim($slug),
                'id_sosmed_category' => $this->input->post('sosmed_category'),
                'contact_id' => $this->input->post('contact_id'),
                'updated_at' => $now,
                'updated_by' => $user_id,
            ];

            $this->M_Setting->update_contact_chat($data, $old_slug);
        } else {

            $data = [
                'contact_name' => $contact_name,
                'slug' => trim($slug),
                'id_sosmed_category' => $this->input->post('sosmed_category'),
                'contact_id' => $this->input->post('contact_id'),
                'created_at' => $now,
                'created_by' => $user_id,
            ];

            $this->M_Setting->add_contact($data);
        }
    }

    public function update_legalitas()
    {

        $user_id = $this->session->userdata('user_id');
        $now = date('Y-m-d H:i:s');

        $data = array(
            'content_id' => trim($this->input->post('legalitas_id')),
            'content_en' => trim($this->input->post('legalitas_en')),
            'content_jp' => trim($this->input->post('legalitas_jp')),
            'updated_at' => $now,
            'updated_by' => $user_id
        );

        $this->M_Setting->update_legalitas($data);
    }
}
