<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    // private $param;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'language_helper'));
        $this->load->library(array('textlibrary', 'pagination'));
        $this->load->helper('date');
        $this->load->model(array('M_Article', 'M_Setting', 'M_Program', 'M_Partner', 'M_Visitor'));
        // $this->load->model('M_Article');
        // $this->load->model('M_Setting');
        // $this->load->model('M_Program');
        // $this->load->model('M_Partner');
    }

    public function index()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['home_text'],
            'pages' => 'id/pages/v_home',
            'articles' => $this->M_Article->lists($language),
            'programs' => $this->M_Program->lists($language),
            'partners' => $this->M_Partner->lists(),
            'videotron' => $this->M_Setting->videotron(),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'facilities' => $this->M_Setting->facility($language),
            'language' => $language,
        ];

        $this->load->view('id/index', $data);
    }
    public function splash_screen()
    {
        $language = $this->detect_language();

        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['home_text'],
            'pages' => 'id/pages/v_home',
            'articles' => $this->M_Article->lists($language),
            'programs' => $this->M_Program->lists($language),
            'partners' => $this->M_Partner->lists(),
            'videotron' => $this->M_Setting->videotron(),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'language' => $language
        ];
        $this->load->view('id/splash', $data);
    }

    public function visi_misi()
    {
        // $device = detect_device();
        $language = $this->detect_language();

        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['visi_misi'],
            'pages' => 'id/pages/v_visi_misi',
            'visi' => $this->M_Setting->footer_section($language, 'visi'),
            'misi' => $this->M_Setting->footer_section($language, 'misi'),
            'lang' => $lang,
            'language' => $language
        ];

        $this->load->view('id/index', $data);
    }

    public function contact()
    { // $device = detect_device();
        $language = $this->detect_language();

        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['contact_us_text'],
            'pages' => 'id/pages/v_contact',
            'visi' => $this->M_Setting->footer_section($language, 'visi'),
            'misi' => $this->M_Setting->footer_section($language, 'misi'),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'programs' => $this->M_Program->lists($language),
            'lang' => $lang,
            'language' => $language
        ];

        $this->load->view('id/index', $data);
    }

    public function philosophy()
    { // $device = detect_device();
        $language = $this->detect_language();

        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['philosophy_text'],
            'pages' => 'id/pages/v_philosophy',
            'philosophy' => $this->M_Setting->footer_section($language, 'philosophy'),
            'lang' => $lang,
            'language' => $language
        ];

        $this->load->view('id/index', $data);
    }

    public function job_vacancy()
    {
        $config['base_url'] = base_url('home/job_vacancy');
        // $config['page_query_string'] = TRUE;
        // $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $this->M_Article->get_published_count();
        $config['per_page'] = 10;
        $config['num_link'] = 5;
        $config['full_tag_open'] = '<div class="pagination-bx clearfix text-center"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></div>';
        $config['first_link'] = TRUE;
        $config['last_link'] = TRUE;
        $config['first_tag_open'] = '<li class="previous">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="next">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] =  '<li> <a href="javascript:void(0);" class="active">';
        $config['cur_tag_close'] = '</a> </li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['display_pages'] = FALSE;

        $this->pagination->initialize($config);

        $from = $this->uri->segment(3);
        $limit = $config['per_page'];
        $language = $this->detect_language();

        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['loker_text'],
            'pages' => 'id/pages/v_article',
            'programs' => $this->M_Program->lists($language),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'articles' => $this->M_Article->article_with_clause($limit, $from, $language, '8'),
            'lang' => $lang,
            'language' => $language
        ];

        $this->load->view('id/index', $data);
    }

    public function faq()
    {
        // $device = detect_device();
        $language = $this->detect_language();

        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['faq'],
            'pages' => 'id/pages/v_faq',
            'lang' => $lang,
            'faq' => $this->M_Setting->faq($language),
            'language' => $language
        ];

        $this->load->view('id/index', $data);
    }

    public function facility()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['facility'],
            'pages' => 'id/pages/v_facility',
            'programs' => $this->M_Program->lists($language),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'facilities' => $this->M_Setting->facility($language),
            'language' => $language,
        ];

        $this->load->view('id/index', $data);
    }

    public function legality()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['our_legality'],
            'pages' => 'id/pages/v_legal',
            'lang' => $lang,
            'legalitas' => $this->M_Setting->footer_section($language, 'legalitas'),
            'language' => $language,
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
