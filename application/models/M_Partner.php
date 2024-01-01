<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Partner extends CI_Model
{
    var $table = 'v_menu';
    var $column_order = array(null, 'menu_nama', 'menu_harga', 'menu_seo', 'kategori_nama');
    var $order = array(null, 'menu_nama', 'menu_harga', 'menu_seo', 'kategori_nama');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function lists()
    {
        $query = $this->db->order_by('nama_partner', 'ASC')->get('partner')->result();
        return $query;
    }

    public function add_partner($data)
    {
        $this->db->select('count(Id) as id');
        $this->db->where('slug', $data["slug"]);
        $query_check = $this->db->get('partner')->row_array();

        $hasil = $query_check["id"];

        if ($hasil > 0) {
            $this->session->set_flashdata('message_name', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			The partner is already available.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            redirect('dash/partner/create');
        } else {

            // $config = array(
            //     'upload_path' => 'assets/images/programs/',
            //     'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF",
            //     'overwrite' => TRUE,
            //     'max_size' => "99999999999",
            //     'max_height' => "800",
            //     'max_width' => "1500",
            //     'file_name' => $data["photo"]
            // );

            // var_dump($config);exit;
            // $this->load->library('upload', $config);

            // if (!$this->upload->do_upload('program_photo')) {
            //     $error = array('error' => $this->upload->display_errors());

            //     $this->session->set_flashdata('message_name', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            // 	Error message: ' . $this->upload->display_errors() . '.
            // 	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            // 	</div>');
            //     // After that you need to used redirect function instead of load view such as 
            //     redirect("dash/program/create", $error);
            // } else {

            $this->db->insert('partner', $data);
            $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				The partner inserted successfully.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
            // After that you need to used redirect function instead of load view such as 
            redirect("dash/partner/create");
            // }
        }
    }

    public function detail_partner($id)
    {
        $query = $this->db->where('slug', $id)->get('partner')->row_array();
        return $query;
    }

    public function update_partner($data, $old_slug)
    {
        $this->db->where('slug', $old_slug);
        $this->db->update('partner', $data);
        $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        The partner updated successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        // After that you need to used redirect function instead of load view such as 
        redirect("dash/partner");
    }
}
