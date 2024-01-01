<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Faq extends CI_Model
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
        $query = $this->db->order_by('Id', 'ASC')->get('faq')->result();
        return $query;
    }

    public function add_faq($data)
    {
        $this->db->select('count(Id) as id');
        $this->db->where('slug', $data["slug"]);
        $query_check = $this->db->get('faq')->row_array();

        $hasil = $query_check["id"];

        if ($hasil > 0) {
            $this->session->set_flashdata('message_name', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			The faq is already available.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            redirect('dash/faq/create');
        } else {

            $this->db->insert('faq', $data);
            $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				The faq added successfully.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
            // After that you need to used redirect function instead of load view such as 
            redirect("dash/faq/create");
            // }
        }
    }

    public function detail_faq($id)
    {
        $query = $this->db->where('slug', $id)->get('faq')->row_array();
        return $query;
    }

    public function update_faq($data, $old_slug)
    {
        $this->db->where('slug', $old_slug);
        $this->db->update('faq', $data);
        $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        The faq updated successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');

        // After that you need to used redirect function instead of load view such as 
        redirect("dash/faq");
    }
}
