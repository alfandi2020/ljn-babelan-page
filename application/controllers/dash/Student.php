<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('M_Auth');
        $this->load->model('M_Student');

        if (!$this->session->userdata('is_logged_in')) {

            $this->session->set_flashdata('message_name', '<div class="alert alert-danger fade show" role="alert">
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
            'title' => 'Student',
            'pages' => 'dashboard/pages/student/v_student',
            'students' => $this->M_Student->lists(),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function download()
    {
        $tanggal_awal = $this->input->post('inputTanggalAwal');
        $new_tanggal_awal = $tanggal_awal . " 00:00:00";
        $tanggal_akhir = $this->input->post('inputTanggalAkhir');
        $new_tanggal_akhir = $tanggal_akhir . " 23:59:59";

        $date_range = array('created_at >=' => $new_tanggal_awal, 'created_at <=' => $new_tanggal_akhir);

        // var_dump($tanggal_awal, $tanggal_akhir, $new_tanggal_awal, $new_tanggal_akhir);
        // exit;

        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $excel = new PHPExcel();

        // Settingan awal fil excel
        $excel->getProperties()->setCreator('LPK Tjokro Bakti Pertiwi')
            ->setLastModifiedBy('LPK Tjokro Bakti Pertiwi')
            ->setTitle("Rekap Pendaftaran Siswa")
            ->setSubject("Belanja")
            ->setDescription("Rekap Pendaftaran Siswa")
            ->setKeywords("Rekap Pendaftaran Siswa");

        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );

        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );

        $style_center = array(
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            )
        );

        $style_right = array(
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
            )
        );

        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "No."); // Set kolom A1 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('B1', "No. Urut pendaftaran"); // Set kolom B1 dengan tulisan "NIS"
        $excel->setActiveSheetIndex(0)->setCellValue('C1', "Nama siswa"); // Set kolom C1 dengan tulisan "NAMA"
        $excel->setActiveSheetIndex(0)->setCellValue('D1', "Usia"); // Set kolom D1 dengan tulisan "JENIS KELAMIN"
        $excel->setActiveSheetIndex(0)->setCellValue('E1', "No. Telepon"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('F1', "Email"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('G1', "Pendidikan terakhir"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('H1', "Jenis kelamin"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('I1', "Tempat lahir"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('J1', "Tanggal lahir"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('K1', "Tinggi badan"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('L1', "Berat badan"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('M1', "Kemampuan bahasa"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('N1', "Pengalaman kerja"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('O1', "Lama kerja"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('P1', "Skill"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('Q1', "Hobi"); // Set kolom E1 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('R1', "Program diikuti"); // Set kolom E1 dengan tulisan "ALAMAT"

        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('I1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('J1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('M1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('N1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('O1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('P1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('Q1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('R1')->applyFromArray($style_col);

        $students = $this->M_Student->download_by_range($date_range);

        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4

        foreach ($students as $s) {

            $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no++ . '.');
            $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $s->nomor_urut);
            $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $s->nama);
            $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $s->usia);
            $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $s->no_telepon);
            $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $s->email);
            $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $s->pd_terakhir);
            $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $s->jenis_kelamin);
            $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $s->tempat_lahir);
            $excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $s->tanggal_lahir);
            $excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $s->tinggi_badan);
            $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $s->berat_badan);
            $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, $s->kemampuan_bahasa);
            $excel->setActiveSheetIndex(0)->setCellValue('N' . $numrow, $s->pengalaman_kerja);
            $excel->setActiveSheetIndex(0)->setCellValue('O' . $numrow, $s->lama_kerja);
            $excel->setActiveSheetIndex(0)->setCellValue('P' . $numrow, $s->skill);
            $excel->setActiveSheetIndex(0)->setCellValue('Q' . $numrow, $s->hobi);
            $excel->setActiveSheetIndex(0)->setCellValue('R' . $numrow, $s->program);

            $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('G' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('H' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('I' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('J' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('K' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('L' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('O' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('P' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('Q' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('R' . $numrow)->applyFromArray($style_row);

            // $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }

        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true); // Set width kolom F
        $excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true); // Set width kolom G
        $excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true); // Set width kolom H
        $excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true); // Set width kolom I
        $excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true); // Set width kolom J
        $excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true); // Set width kolom K
        $excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true); // Set width kolom L
        $excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true); // Set width kolom M
        $excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true); // Set width kolom M
        $excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true); // Set width kolom M
        $excel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true); // Set width kolom M
        $excel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true); // Set width kolom M
        $excel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true); // Set width kolom M

        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Sheet 1");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        // ob_end_clean();
        header("Content-type: application/vnd.ms-excel");
        header('Content-Disposition: attachment; filename="Rekap Pendaftaran Siswa ' . $tanggal_awal . ' sd ' . $tanggal_akhir . '.xlsx"');
        header("Pragma: no-cache");
        header("Expires: 0");
        ob_end_clean();
        // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition: attachment; filename="Daftar Belanja.xlsx"'); // Set nama file excel nya
        // header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
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
