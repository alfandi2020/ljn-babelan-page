<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Program extends CI_Model
{
    var $table = 'v_menu';
    var $column_order = array(null, 'menu_nama', 'menu_harga', 'menu_seo', 'kategori_nama');
    var $order = array(null, 'menu_nama', 'menu_harga', 'menu_seo', 'kategori_nama');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function lists($language)
    {
        $query = $this->db->select('nama_program_' . $language . ' as nama_program, keterangan_' . $language . ' as keterangan, photo, slug')->order_by('nama_program_' . $language, 'ASC')->get('program')->result();
        return $query;
    }

    public function list_dashboard()
    {
        $query = $this->db->select('nama_program_id as nama_program, slug, nama_program_singkat_id')->order_by('nama_program_id', 'ASC')->get('program')->result();

        return $query;
    }

    public function add_program($data)
    {
        $this->db->select('count(Id) as id');
        $this->db->where('slug', $data["slug"]);
        $query_check = $this->db->get('program')->row_array();

        $hasil = $query_check["id"];

        if ($hasil > 0) {
            $this->session->set_flashdata('message_name', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			The program is already available.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            redirect('dash/program/create');
        } else {

            $config = array(
                'upload_path' => 'assets/images/programs/',
                'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF",
                'overwrite' => TRUE,
                'max_size' => "99999999999",
                'max_height' => "800",
                'max_width' => "1500",
                'file_name' => $data["photo"]
            );

            // var_dump($config);exit;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('program_photo')) {
                $error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('message_name', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Error message: ' . $this->upload->display_errors() . '.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
                // After that you need to used redirect function instead of load view such as 
                redirect("dash/program/create", $error);
            } else {

                $this->db->insert('program', $data);
                $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				The program inserted successfully.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
                // After that you need to used redirect function instead of load view such as 
                redirect("dash/program/create");
            }
        }
    }

    public function detail_program($id, $language)
    {
        $query = $this->db->select('nama_program_' . $language . ' as nama_program, keterangan_' . $language . ' as keterangan, content_' . $language . ' as content, slug, photo')->where('slug', $id)->get('program')->row_array();

        return $query;
    }

    public function detail_program_edit($id)
    {
        $query = $this->db->select('nama_program_id, nama_program_en, nama_program_jp, keterangan_id, keterangan_en, keterangan_jp, content_id, content_en, content_jp, slug, photo')->where('slug', $id)->get('program')->row_array();

        return $query;
    }

    public function update_program($data, $old_slug)
    {
        $this->db->where('slug', $old_slug);
        $this->db->update('program', $data);
        $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        The program updated successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        // After that you need to used redirect function instead of load view such as 
        redirect("dash/program");
    }

    public function video()
    {
        $query = $this->db->where('Id', '1')->get('videotron')->row_array();
        return $query;
    }

    public function max_number()
    {
        $query = $this->db->select('max(nomor_urut) as nomor_urut')->get('siswa')->row_array();
        return $query;
    }

    public function tambah_siswa($data)
    {
        $query = $this->db->insert('siswa', $data);

        return $query;
    }
}
