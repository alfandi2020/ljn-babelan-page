<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Article extends CI_Model
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
        $query = $this->db->select('judul_' . $language . ' as judul, headline_' . $language . ' as headline, content_' . $language . ' as content, photo, author, publish_date, slug, id_category')->where_not_in('id_category', array(7, 8))->order_by('judul_' . $language, 'ASC')->get('article')->result();
        return $query;
    }

    public function list_dashboard()
    {
        $query = $this->db->select('judul_id as judul, slug, author, id_category')->order_by('judul_id', 'ASC')->get('article')->result();

        return $query;
    }

    public function list_bydate($limit, $from, $language)
    {
        $query = $this->db->select('judul_' . $language . ' as judul, headline_' . $language . ' as headline, content_' . $language . ' as content, photo, author, publish_date, slug, id_category')->where_not_in('id_category', '7')->order_by('publish_date', 'DESC')->order_by('judul', 'ASC')->get('article', $limit, $from)->result();
        return $query;
    }

    public function get_published_count()
    {
        $query = $this->db->order_by('publish_date', 'DESC')->get('article');

        // print_r($query->num_rows());
        // exit;
        return $query->num_rows();
    }

    public function add_article($data)
    {
        $this->db->select('count(Id) as id');
        $this->db->where('slug', $data["slug"]);
        $query_check = $this->db->get('article')->row_array();

        $hasil = $query_check["id"];

        if ($hasil > 0) {
            $this->session->set_flashdata('message_name', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			The content is already available.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            redirect('dash/article/create');
        } else {

            $this->db->insert('article', $data);
            $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				The content added successfully.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
            // After that you need to used redirect function instead of load view such as 
            redirect("dash/article/create");
        }
    }

    public function detail_article($id, $language)
    {
        $query = $this->db->select('judul_' . $language . ' as judul, headline_' . $language . ' as headline, content_' . $language . ' as content, photo, author, publish_date, slug, id_category')->where('slug', $id)->get('article')->row_array();
        return $query;
    }

    public function detail_article_edit($id)
    {
        $query = $this->db->select('judul_id, judul_en, judul_jp, headline_id, headline_en, headline_jp, content_id, content_en, content_jp, slug, photo, publish_date, id_category')->where('slug', $id)->get('article')->row_array();

        return $query;
    }

    public function update_article($data, $old_slug)
    {
        $this->db->where('slug', $old_slug);
        $this->db->update('article', $data);
        $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        The article updated successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        // After that you need to used redirect function instead of load view such as 

        redirect($_SERVER['HTTP_REFERER']);
    }

    public function is_available($id)
    {
        $query = $this->db->select('photo')->where('slug', $id)->get('article')->row_array();

        return $query;
    }

    public function update_photo($data, $slug)
    {
        $this->db->where('slug', $slug);
        $this->db->update('article', $data);

        $this->session->set_flashdata('message_photo', '<div class="alert alert-success fade show" role="alert">
        The photo has been successfully modified.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        // After that you need to used redirect function instead of load view such as 

        redirect($_SERVER['HTTP_REFERER']);
    }

    public function video()
    {
        $query = $this->db->where('Id', '1')->get('videotron')->row_array();
        return $query;
    }

    public function author($id)
    {
        $query = $this->db->where('Id', $id)->get('user')->row_array();
        return $query;
    }

    public function article_with_clause($limit, $from, $language, $clause)
    {
        $query = $this->db->select('judul_' . $language .  ' as judul, headline_' . $language . ' as headline, content_' . $language . ' as content, photo, author, publish_date, slug, id_category')->where('id_category', $clause)->order_by('judul_' . $language, 'ASC')->get('article', $limit, $from)->result();
        return $query;
    }

    public function delete($slug)
    {
        $this->db->where('slug', $slug);
        $this->db->delete('article');

        $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        The article has been successfully deleted.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        // After that you need to used redirect function instead of load view such as 

        redirect($_SERVER['HTTP_REFERER']);
    }
}
