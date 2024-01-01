<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    // private $param;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model(array('M_Setting', 'M_Program', 'M_Article'));
        $this->load->helper(array('form', 'url', 'language_helper'));
        $this->load->library(array('textlibrary', 'form_validation', 'Mailer', 'pagination'));
        $this->load->helper('date');
    }

    function index()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['home_text'],
            'pages' => 'registrasi',
            'programs' => $this->M_Program->lists($language),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'language' => $language
        ];

        $this->load->view('id/index', $data);
    }

    function store()
    {
        $this->form_validation->set_rules('student_name', 'Name ', 'required');
        $this->form_validation->set_rules('student_age', ' Age ', 'required');
        $this->form_validation->set_rules('student_email', ' Email ', 'required');
        $this->form_validation->set_rules('student_phone', ' Phone ', 'required');
        // $this->form_validation->set_rules('student_last_edu', ' Pendidikan terakhir ', 'required');
        // $this->form_validation->set_rules('newLastEdu', ' Latest education ', 'required');
        $this->form_validation->set_rules('student_gender', ' Gender ', 'required');
        $this->form_validation->set_rules('student_birthplace', ' Birthplace ', 'required');
        $this->form_validation->set_rules('student_birthdate', ' Birthdate ', 'required');
        $this->form_validation->set_rules('student_height', ' Height ', 'required');
        $this->form_validation->set_rules('student_weight', ' Weight ', 'required');
        $this->form_validation->set_rules('student_lang_skill', ' Language skill ', 'required');
        $this->form_validation->set_rules('student_work_experience', ' Work experience ', 'required');
        $this->form_validation->set_rules('student_years_experience', ' Years experience ', 'required');
        $this->form_validation->set_rules('student_skill', ' Skill ', 'required');
        $this->form_validation->set_rules('student_hobby', ' Hobby ', 'required');
        $this->form_validation->set_rules('student_program', ' Program ', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('message_name', '<div class="alert alert-danger"> <a href="javascript:void(0);" class="close ti-close" data-dismiss="alert" aria-label="close"></a> <strong>Failed!</strong> ' . trim(preg_replace(["/<p>/", "/<\/p>/"], ["", ""], validation_errors())) . ' </div>');

            $this->session->set_flashdata('student_name', set_value('student_name'));
            $this->session->set_flashdata('student_age', set_value('student_age'));
            $this->session->set_flashdata('student_email', set_value('studentemaile'));
            $this->session->set_flashdata('student_phone', set_value('student_phone'));
            $this->session->set_flashdata('student_last_edu', set_value('student_last_edu'));
            $this->session->set_flashdata('newLastEdu', set_value('newLastEdu'));
            $this->session->set_flashdata('student_gender', set_value('student_gender'));
            $this->session->set_flashdata('student_birthplace', set_value('student_birthplace'));
            $this->session->set_flashdata('student_birthdate', set_value('student_birthdate'));
            $this->session->set_flashdata('student_height', set_value('student_height'));
            $this->session->set_flashdata('student_weight', set_value('student_weight'));
            $this->session->set_flashdata('student_lang_skill', set_value('student_lang_skill'));
            $this->session->set_flashdata('student_work_experience', set_value('student_work_experience'));
            $this->session->set_flashdata('student_years_experience', set_value('student_years_experience'));
            $this->session->set_flashdata('student_skill', set_value('student_skill'));
            $this->session->set_flashdata('student_hobby', set_value('student_hobby'));
            $this->session->set_flashdata('student_program', set_value('student_program'));

            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $now = date('Y-m-d H:i:s');

            $student_name = trim($this->input->post('student_name'));

            $max_number = $this->M_Program->max_number();

            if (!$max_number['nomor_urut']) {
                $no_urut = 1;
            } else {
                $no_urut = $max_number['nomor_urut'] + 1;
            }

            // pembuatan slug dari nama produk
            $out = explode(" ", $student_name);
            $slug = preg_replace("/[^A-Za-z0-9\-]/", "", strtolower(implode("-", $out)));

            $cv = $_FILES['student_cv']['name']; // Nama file 
            // Mendapatkan extension
            $pathInfo = pathinfo($cv);
            $extension = $pathInfo['extension']; // Extension file

            $new_slug = $no_urut . '-' . $slug;
            $newcvFileName = $new_slug . '.' . $extension;

            $config = array(
                'upload_path' => 'assets/pdf/siswa/',
                'allowed_types' => "PDF|pdf",
                'overwrite' => TRUE,
                'max_size' => "1024",
                'file_name' => $newcvFileName
            );

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('student_cv')) {
                $this->session->set_flashdata('message_name', '<div class="alert alert-danger"> <a href="javascript:void(0);" class="close ti-close" data-dismiss="alert" aria-label="close"></a> <strong>Failed!</strong> ' . $this->upload->display_errors() . ' </div>');

                $this->session->set_flashdata('student_name', set_value('student_name'));
                $this->session->set_flashdata('student_age', set_value('student_age'));
                $this->session->set_flashdata('student_email', set_value('student_email'));
                $this->session->set_flashdata('student_phone', set_value('student_phone'));
                $this->session->set_flashdata('student_last_edu', set_value('student_last_edu'));
                $this->session->set_flashdata('newLastEdu', set_value('newLastEdu'));
                $this->session->set_flashdata('student_gender', set_value('student_gender'));
                $this->session->set_flashdata('student_birthplace', set_value('student_birthplace'));
                $this->session->set_flashdata('student_birthdate', set_value('student_birthdate'));
                $this->session->set_flashdata('student_height', set_value('student_height'));
                $this->session->set_flashdata('student_weight', set_value('student_weight'));
                $this->session->set_flashdata('student_lang_skill', set_value('student_lang_skill'));
                $this->session->set_flashdata('student_work_experience', set_value('student_work_experience'));
                $this->session->set_flashdata('student_years_experience', set_value('student_years_experience'));
                $this->session->set_flashdata('student_skill', set_value('student_skill'));
                $this->session->set_flashdata('student_hobby', set_value('student_hobby'));
                $this->session->set_flashdata('student_program', set_value('student_program'));

                redirect($_SERVER['HTTP_REFERER']);
            } else {

                if ($this->input->post('student_last_edu') == "__tambah__") {
                    $pd_terakhir = $this->input->post('newLastEdu');
                } else {
                    $pd_terakhir = $this->input->post('student_last_edu');
                }

                $data = [
                    'nama' => $student_name,
                    'usia' => $this->input->post('student_age'),
                    'email' => $this->input->post('student_email'),
                    'no_telepon' => $this->input->post('student_phone'),
                    'pd_terakhir' => $pd_terakhir,
                    'jenis_kelamin' => $this->input->post('student_gender'),
                    'tempat_lahir' => $this->input->post('student_birthplace'),
                    'tanggal_lahir' => $this->input->post('student_birthdate'),
                    'tinggi_badan' => $this->input->post('student_height'),
                    'berat_badan' => $this->input->post('student_weight'),
                    'kemampuan_bahasa' => $this->input->post('student_lang_skill'),
                    'pengalaman_kerja' => $this->input->post('student_work_experience'),
                    'lama_kerja' => $this->input->post('student_years_experience'),
                    'skill' => $this->input->post('student_skill'),
                    'hobi' => $this->input->post('student_hobby'),
                    'program' => $this->input->post('student_program'),
                    'file_cv' => $newcvFileName,
                    'slug' => trim($new_slug),
                    'created_at' => $now,
                    'nomor_urut' => $no_urut,
                ];

                $language = $this->detect_language();
                $lang = $this->M_Setting->lang($language);

                $this->M_Program->tambah_siswa($data);

                // Pengaturan email
                $send_mail = $this->send_email($data);

                if ($send_mail) {
                    $this->session->set_flashdata('message_name', '<div class="alert alert-success"> <a href="javascript:void(0);" class="close ti-close" data-dismiss="alert" aria-label="close"></a> <strong>' . $lang['success_text'] . '! - ' . $lang['email_success_txt'] . '</strong> </div>');
                } else {
                    $this->session->set_flashdata('message_name', '<div class="alert alert-danger"> <a href="javascript:void(0);" class="close ti-close" data-dismiss="alert" aria-label="close"></a> <strong>' . $lang['failed_text'] . ' - ' . $lang['email_failed_txt'] . '</strong> </div>');
                }

                redirect('registrasi');
            }
        }
    }

    function informasi()
    {
        $config['base_url'] = base_url('registrasi/informasi');
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
            'title' => $lang['reg_info'],
            'pages' => 'id/pages/registrasi/v_info',
            'informations' => $this->M_Article->article_with_clause($limit, $from, $language, '7'),
            'programs' => $this->M_Program->lists($language),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'language' => $language
        ];

        $this->load->view('id/index', $data);
    }

    function getRomawi($bln)
    {
        switch ($bln) {
            case 1:
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        }
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

    public function send_email($data)
    {
        $bodyContent = '';
        foreach ($data as $key => $value) {
            $bodyContent .= ucfirst(str_replace('_', ' ', $key)) . ': ' . $value . '<br>';
        }

        $mail = $this->mailer->load();
        $mail->isSMTP();
        $mail->Host = 'mail.lpktjokrobaktipertiwi.id';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@lpktjokrobaktipertiwi.id';
        $mail->Password = 'P@ssword2023';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom("info@lpktjokrobaktipertiwi.id", "LPK Tjokro Bakti Pertiwi");
        $mail->addAddress($data['email']);
        $mail->isHTML(true);
        $mail->Subject = "Registrasi LPK";
        $mail->Body    = "Dear, " . $data['name'] . ".<br> Thank you for registering with us!<br><br>" . $bodyContent;

        if ($mail->send()) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }
    function x()
    {
        $this->load->library('upload');
        $extensi_true = array('png', 'jpg', 'jpeg');
        $nama = $_FILES['foto']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        // $target_x = '/Applications/XAMPP/xamppfiles/htdocs/bandestraining/';
        $target_x = '/home/u1677928/public_html/id/';
        if (in_array($ekstensi, $extensi_true) === true) {
            if (($this->input->post('tinggi_bdn') > "158" && $this->input->post('jenis_kelamin') == "Perempuan") || ($this->input->post('tinggi_bdn') > "165" && $this->input->post('jenis_kelamin') == "Laki-laki")) {
                $filenamex = md5($_FILES['foto']['name']) . '.' . $ekstensi;
                $target = $target_x . 'assets/images/foto/' . $filenamex;
                move_uploaded_file($_FILES['foto']['tmp_name'], $target);
                $mpdf = new \Mpdf\Mpdf([
                    'tempDir' => '/tmp',
                    'mode' => '',
                    'format' => 'A4',
                    'default_font_size' => 0,
                    'default_font' => '',
                    'margin_left' => 0,
                    'margin_right' => 0,
                    'margin_top' => 0,
                    'margin_bottom' => 0,
                    // 'margin_header' => 10,
                    // 'margin_footer' => 5,
                    'orientation' => 'P',
                ]);
                $data = [
                    "nama" => strtoupper($this->input->post('nama')),
                    "alamat" => strtoupper($this->input->post('alamat')),
                    "tgl_lahir" => $this->input->post('tgl_lahir'),
                    "agama" => strtoupper($this->input->post('agama')),
                    "tinggi_bdn" => strtoupper($this->input->post('tinggi_bdn')),
                    "berat_bdn" => strtoupper($this->input->post('berat_bdn')),
                    "jenis_kelamin" => strtoupper($this->input->post('jenis_kelamin')),
                    "no_telp" => strtoupper($this->input->post('no_telp')),
                    "status" => strtoupper($this->input->post('status')),
                    "email" => $this->input->post('email'),
                    "golongan_darah" => strtoupper($this->input->post('golongan_darah')),
                    "pelatihan" => strtoupper($this->input->post('pelatihan')),
                    "no_regis" => strtoupper($this->input->post('no_regis')),
                    "foto" => $filenamex
                ];
                //perempuan 158
                //cowo 165
                $db =  $this->db->query("SELECT MAX(no_bat) as no_bat FROM registrasi")->row_array();
                $nomor = $db['no_bat'];
                $nomor++;
                $nomor_t = sprintf("%03s", $nomor);;
                $bulan = date('n');
                $romawi = $this->getRomawi($bulan);
                $tahun = date('Y');
                $insert = [
                    "no_bat" => $nomor,
                    "no_registrasi" => $nomor_t . '/BAT/REG/' . $romawi . '/' . $tahun
                ];
                $this->db->insert('registrasi', $insert);

                $mpdf->WriteHTML($this->load->view('registrasi_view', $data, true));
                $mpdf->SetHTMLFooter('
                        <img style="margin-bottom: -34px;" src="assets/images/footer.png" alt="">
                        ');
                // $mpdf->Output();
                $filename = $target_x . "/assets/$filenamex.pdf";
                $mpdf->Output($filename, 'F');

                $this->load->library("Mailer");
                $mail = $this->mailer->load();
                $mail->isSMTP();
                $mail->Host       = 'mail.bandestraining.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'info@bandestraining.com';
                $mail->Password   = '+7!WX?B]tKh~';
                $mail->SMTPSecure = 'ssl';
                $mail->Port       = 465;
                $mail->setFrom("info@bandestraining.com", "BAT");
                $mail->addAddress("cs@bandestraining.com");
                $mail->isHTML(true);
                $mail->Subject = "Registrasi BAT";
                $mail->Body    = "<h4><b>Registrasi Berhasil</b><br><br>Nama : " . $this->input->post('nama') . " <br> No Telp : " . $this->input->post('no_telp') . " <br>Berikut ini form pdf pendaftaran";
                $mail->addAttachment($target_x . 'assets/' . $filenamex . '.pdf');
                if ($mail->send()) {
                    // echo $mail->send();
                    $this->session->set_flashdata("pesan", '<div class="alert alert-success" id="alert">Registrasi Berhasil  ' . $this->input->post('nama') . '</div>');
                    redirect('registrasi');
                } else {
                    $this->session->set_flashdata("pesan", '<div class="alert alert-danger" id="alert">Email not sent.</div>');
                    redirect('registrasi');
                }
            } else {
                $this->session->set_flashdata("pesan", '<div class="alert alert-danger" id="alert">Tinggi perempuan minimal 158cm dan laki-laki 165cm</div>');
                redirect('registrasi');
            }
        } else {
            $this->session->set_flashdata("pesan", '<div class="alert alert-danger" id="alert">Extensi yang diizinkan jpg,jpeg,png</div>');
            redirect('registrasi');
        }
    }
    function logout()
    {
        $array_unset = array('id_user', 'username', 'nama', 'email', 'role', 'status');
        $this->session->unset_userdata($array_unset);
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('login');
    }
}
