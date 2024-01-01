<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Custom404 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // load base_url
        $this->load->helper('url');
        $this->load->model('M_Setting');
        $this->load->library('textlibrary');
    }

    public function index()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'lang' => $lang,
        ];
        $this->output->set_status_header('404');
        $this->load->view('errors/html/error_404', $data);
    }

    function detect_language()
    {
        $CI = &get_instance();
        $language = $CI->session->userdata('language');

        // Jika tidak ada bahasa di session, gunakan bahasa default

        if (!$language) {
            $language = "id";
        } else {
            $language = $language;
        }

        return $language;
    }
}
