<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'string', 'date'));
        $this->load->library(array('textlibrary', 'session', 'pagination'));
        $this->load->model(array('M_Article', 'M_Program', 'M_Setting', 'M_Partner'));
    }

    public function index()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['program_text'],
            'pages' => 'id/pages/v_program',
            'programs' => $this->M_Program->lists($language),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'language' => $language
        ];
        $this->load->view('id/index', $data);
    }

    public function detail($id)
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['program_text'],
            'pages' => 'id/pages/v_program_detail',
            'program' => $this->M_Program->detail_program($id, $language),
            'programs' => $this->M_Program->lists($language),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'language' => $language
        ];
        $this->load->view('id/index', $data);
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
