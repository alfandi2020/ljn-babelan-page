<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('M_Auth');
        $this->load->model('M_Article');
        $this->load->model('M_Setting');
        $this->load->library('form_validation');

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
            'title' => 'Article',
            'pages' => 'dashboard/pages/article/v_article',
            'articles' => $this->M_Article->list_dashboard(),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Article',
            'pages' => 'dashboard/pages/article/v_create',
            'categories' => $this->M_Setting->category(),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function store()
    {
        $user_id = $this->session->userdata('user_id');
        $article_title_id = trim($this->input->post('article_title_id'));
        $article_title_en = trim($this->input->post('article_title_en'));
        $article_title_jp = trim($this->input->post('article_title_jp'));

        // pembuatan slug dari nama produk
        $out = explode(" ", $article_title_id);
        $slug = preg_replace("/[^A-Za-z0-9\-]/", "", strtolower(implode("-", $out)));

        $now = date('Y-m-d H:i:s');

        $old_slug = $this->uri->segment(4);

        $this->form_validation->set_rules('article_title_id', 'The Title in <i class="flag-icon flag-icon-id"></i>', 'required');
        $this->form_validation->set_rules('article_title_en', 'The Title in <i class="flag-icon flag-icon-gb-eng"></i>', 'required');
        $this->form_validation->set_rules('article_title_jp', 'The Title in <i class="flag-icon flag-icon-jp"></i>', 'required');
        $this->form_validation->set_rules('article_headline_id', 'The Headline in <i class="flag-icon flag-icon-id"></i>', 'required');
        $this->form_validation->set_rules('article_headline_en', 'The Headline in <i class="flag-icon flag-icon-gb-eng"></i>', 'required');
        $this->form_validation->set_rules('article_headline_jp', 'The Headline in <i class="flag-icon flag-icon-jp"></i>', 'required');
        // $this->form_validation->set_rules('content_id', ' The Content in <i class="flag-icon flag-icon-id"></i>', 'required');
        // $this->form_validation->set_rules('content_en', ' The Content in <i class="flag-icon flag-icon-gb-eng"></i>', 'required');
        // $this->form_validation->set_rules('content_jp', ' The Content in <i class="flag-icon flag-icon-jp"></i>', 'required');
        $this->form_validation->set_rules('article_category', 'The Category ', 'required');
        $this->form_validation->set_rules('article_publish_date', 'The Publish date ', 'required');

        if ($this->form_validation->run() ===  FALSE) {
            $this->session->set_flashdata('message_name', '<div class="alert alert-danger fade show" role="alert">
            ' . trim(preg_replace(["/<p>/", "/<\/p>/"], ["", ""], validation_errors())) . '<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>');

            $this->session->set_flashdata('article_title_id', set_value('article_title_id'));
            $this->session->set_flashdata('article_title_en', set_value('article_title_en'));
            $this->session->set_flashdata('article_title_jp', set_value('article_title_jp'));
            $this->session->set_flashdata('headline_id', set_value('headline_id'));
            $this->session->set_flashdata('headline_en', set_value('headline_en'));
            $this->session->set_flashdata('headline_jp', set_value('headline_jp'));
            $this->session->set_flashdata('content_id', set_value('content_id'));
            $this->session->set_flashdata('content_en', set_value('content_en'));
            $this->session->set_flashdata('content_jp', set_value('content_jp'));
            $this->session->set_flashdata('article_category', set_value('article_category'));
            $this->session->set_flashdata('article_publish_date', set_value('article_publish_date'));

            redirect($_SERVER['HTTP_REFERER']);
        } else {
            if ($old_slug) {

                $data = [
                    'id_category' => $this->input->post('article_category'),
                    'judul_id' => $article_title_id,
                    'judul_en' => $article_title_en,
                    'judul_jp' => $article_title_jp,
                    'headline_id' => trim($this->input->post('article_headline_id')),
                    'headline_en' => trim($this->input->post('article_headline_en')),
                    'headline_jp' => trim($this->input->post('article_headline_jp')),
                    'content_id' => trim($this->input->post('content_id')),
                    'content_en' => trim($this->input->post('content_en')),
                    'content_jp' => trim($this->input->post('content_jp')),
                    'author' => $user_id,
                    'publish_date' => $this->input->post('article_publish_date'),
                    'slug' => trim($slug),
                    'updated_at' => $now,
                    'updated_by' => $user_id
                ];

                $this->M_Article->update_article($data, $old_slug);
            } else {

                $photo = $_FILES['article_photo']['name']; // Nama file 
                // Mendapatkan extension
                $pathInfo = pathinfo($photo);
                $extension = $pathInfo['extension']; // Extension file
                $newPhotoFileName = $slug . '.' . $extension;

                $config = array(
                    'upload_path' => 'assets/images/articles/',
                    'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF|WEBP",
                    'overwrite' => TRUE,
                    'max_size' => "99999999999",
                    'max_height' => "2000",
                    'max_width' => "2500",
                    'file_name' => $newPhotoFileName
                );

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('article_photo')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->session->set_flashdata('message_name', '<div class="alert alert-danger fade show" role="alert">
                    Error message: ' . $this->upload->display_errors() . '.
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                    </div>');

                    $this->session->set_flashdata('article_title_id', set_value('article_title_id'));
                    $this->session->set_flashdata('article_title_en', set_value('article_title_en'));
                    $this->session->set_flashdata('article_title_jp', set_value('article_title_jp'));
                    $this->session->set_flashdata('headline_id', set_value('headline_id'));
                    $this->session->set_flashdata('headline_en', set_value('headline_en'));
                    $this->session->set_flashdata('headline_jp', set_value('headline_jp'));
                    $this->session->set_flashdata('content_id', set_value('content_id'));
                    $this->session->set_flashdata('content_en', set_value('content_en'));
                    $this->session->set_flashdata('content_jp', set_value('content_jp'));
                    $this->session->set_flashdata('article_category', set_value('article_category'));
                    $this->session->set_flashdata('article_publish_date', set_value('article_publish_date'));

                    // After that you need to used redirect function instead of load view such as 
                    redirect($_SERVER['HTTP_REFERER'], $error);
                } else {

                    $data = [
                        'id_category' => $this->input->post('article_category'),
                        'judul_id' => $article_title_id,
                        'judul_en' => $article_title_en,
                        'judul_jp' => $article_title_jp,
                        'headline_id' => trim($this->input->post('article_headline_id')),
                        'headline_en' => trim($this->input->post('article_headline_en')),
                        'headline_jp' => trim($this->input->post('article_headline_jp')),
                        'content_id' => trim($this->input->post('content_id')),
                        'content_en' => trim($this->input->post('content_en')),
                        'content_jp' => trim($this->input->post('content_jp')),
                        'author' => $user_id,
                        'photo' => $newPhotoFileName,
                        'publish_date' => $this->input->post('article_publish_date'),
                        'slug' => trim($slug),
                        'created_at' => $now,
                        'created_by' => $user_id,
                    ];

                    $this->M_Article->add_article($data);
                }
            }
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit article',
            'pages' => 'dashboard/pages/article/v_create',
            'article' => $this->M_Article->detail_article_edit($id),
            'categories' => $this->M_Setting->category(),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];

        $this->load->view('dashboard/index', $data);
    }

    public function update_photo($slug)
    {
        $user_id = $this->session->userdata('user_id');

        $cek = $this->M_Article->is_available($slug);

        $foto = $cek["photo"];
        $path = "assets/images/articles/" . $foto;

        if (file_exists($path)) {
            unlink($path);
        }

        $now = date('Y-m-d H:i:s');

        $photo = $_FILES['article_photo']['name']; // Nama file 
        // Mendapatkan extension
        $pathInfo = pathinfo($photo);
        $extension = $pathInfo['extension']; // Extension file
        $newPhotoFileName = $slug . '.' . $extension;

        $config = array(
            'upload_path' => 'assets/images/articles/',
            'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF|WEBP",
            'overwrite' => TRUE,
            'max_size' => "99999999999",
            'max_height' => "800",
            'max_width' => "1500",
            'file_name' => $newPhotoFileName
        );

        // var_dump($config);exit;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('article_photo')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('message_name', '<div class="alert alert-danger fade show" role="alert">
            Error message: ' . $this->upload->display_errors() . '.
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>');

            // After that you need to used redirect function instead of load view such as 
            redirect($_SERVER['HTTP_REFERER'], $error);
        } else {

            $data = array(
                'photo' => $newPhotoFileName,
                'updated_at' => $now,
                'updated_by' => $user_id
            );

            $this->M_Article->update_photo($data, $slug);
        }
    }

    public function delete()
    {
        $slug = $this->uri->segment(4);

        $cek = $this->M_Article->is_available($slug);

        $foto = $cek["photo"];

        // print_r($foto);
        // exit;
        $path = "assets/images/articles/" . $foto;

        if (file_exists($path)) {
            unlink($path);
        }

        $this->M_Article->delete($slug);
    }
}
