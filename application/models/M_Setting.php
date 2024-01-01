<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Setting extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function videotron()
    {
        $query = $this->db->select('Id, content_id as content')->where('Id', '1')->get('settings')->row_array();
        return $query;
    }

    public function update_videotron($data, $id)
    {
        $query = $this->db->where('Id', $id)->get('settings')->row_array();

        $videotron = $query["content_id"];
        $path = "assets/asset_fr/video/" . $videotron;

        if (file_exists($path)) {
            unlink($path);
        }

        $config = array(
            'upload_path' => 'assets/asset_fr/video/',
            'allowed_types' => "mp4",
            'overwrite' => TRUE,
            'max_size' => "",
            'max_height' => "",
            'max_width' => "",
            'file_name' => $data["content_id"]
        );

        // var_dump($config);exit;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('input_videotron')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('message_name', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Videotron has not been uploaded yet.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            // After that you need to used redirect function instead of load view such as 
            redirect("dash/settings/", $error);
        } else {
            $this->db->where('Id', $id);
            $this->db->update('settings', $data);
            $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Videotron has been successfully updated.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            // After that you need to used redirect function instead of load view such as 
            redirect("dash/settings");
        }
    }

    // public function visi()
    // {
    //     $query = $this->db->where('kategori', 'visi')->get('settings')->row_array();
    //     return $query;
    // }

    // public function misi()
    // {
    //     $query = $this->db->where('kategori', 'misi')->get('settings')->row_array();
    //     return $query;
    // }

    // public function alamat()
    // {
    //     $query = $this->db->where('kategori', 'alamat')->get('settings')->row_array();
    //     return $query;
    // }

    // public function telepon()
    // {
    //     $query = $this->db->where('kategori', 'telepon')->get('settings')->row_array();
    //     return $query;
    // }

    // public function email()
    // {
    //     $query = $this->db->where('kategori', 'email')->get('settings')->row_array();
    //     return $query;
    // }
    public function setting($clause)
    {
        $query = $this->db->where('kategori', $clause)->get('settings')->row_array();
        return $query;
    }

    public function footer_section($language, $clause)
    {
        $query = $this->db->select('judul_setting_' . $language . ' as judul_setting, content_' . $language . ' as content')->where('kategori', $clause)->get('settings')->row_array();
        return $query;
    }

    public function update_visimisi($data_visi, $data_misi)
    {
        $this->db->where('kategori', 'visi');
        $this->db->update('settings', $data_visi);

        $this->db->where('kategori', 'misi');
        $this->db->update('settings', $data_misi);

        $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Visi misi information has been successfully updated.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        // After that you need to used redirect function instead of load view such as 
        redirect("dash/settings");
    }

    public function update_contact($data_alamat, $data_telepon, $data_email)
    {
        $this->db->where('kategori', 'alamat');
        $this->db->update('settings', $data_alamat);

        $this->db->where('kategori', 'telepon');
        $this->db->update('settings', $data_telepon);

        $this->db->where('kategori', 'email');
        $this->db->update('settings', $data_email);

        $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Contact information has been successfully updated.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        // After that you need to used redirect function instead of load view such as 
        redirect("dash/settings");
    }

    public function category()
    {
        $query = $this->db->order_by('category_name', 'ASC')->get('article_category')->result();

        return $query;
    }

    public function add_category($data)
    {

        $this->db->select('count(Id) as id');
        $this->db->where('slug', $data["slug"]);
        $query_check = $this->db->get('article_category')->row_array();

        $hasil = $query_check["id"];

        if ($hasil > 0) {
            $this->session->set_flashdata('message_name', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			The category is already available.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            redirect('dash/settings');
        } else {

            $this->db->insert('article_category', $data);
            $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				The category added successfully.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
            // After that you need to used redirect function instead of load view such as 
            redirect("dash/settings");
        }
    }

    public function detail_category($id)
    {
        $query = $this->db->where('Id', $id)->get('article_category')->row_array();

        return $query;
    }

    public function lang($language)
    {
        $result = $this->db
            ->select('key_name, ' . $language)
            ->get('language_data')
            ->result_array();

        $languageData = [];

        foreach ($result as $row) {
            $languageData[$row['key_name']] = $row[$language];
        }

        return $languageData;
    }

    public function chat()
    {
        $query = $this->db->from('contact a')->join('social_media b', 'b.Id = a.id_sosmed_category')->get()->result();

        return $query;
    }

    public function social_media()
    {
        $query = $this->db->get('social_media')->result();

        return $query;
    }

    public function detail_social_media($id)
    {
        $query = $this->db->where('Id', $id)->get('social_media')->result();

        return $query;
    }

    public function add_contact($data)
    {
        $this->db->select('count(Id) as id');
        $this->db->where('slug', $data["slug"]);
        $query_check = $this->db->get('contact')->row_array();

        $hasil = $query_check["id"];

        if ($hasil > 0) {
            $this->session->set_flashdata('message_name', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			The contact is already available.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            redirect('dash/settings');
        } else {

            $this->db->insert('contact', $data);
            $this->session->set_flashdata('message_name', '
            <div class="alert alert-success alert-dismissible alert-dismissible fade show" role="alert">
				The contact added successfully.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');

            // After that you need to used redirect function instead of load view such as 
            redirect("dash/settings");
        }
    }

    public function update_contact_chat($data, $old_slug)
    {
        $this->db->where('slug', $old_slug);
        $this->db->update('contact', $data);

        $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Contact has been successfully updated.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        // After that you need to used redirect function instead of load view such as 
        redirect("dash/settings");
    }

    public function detail_contact($id)
    {
        $query = $this->db->where('Id', $id)->get('contact')->row_array();

        return $query;
    }

    public function facility($language)
    {
        $result = $this->db
            ->select('key_name, icon, photo, ' . $language)
            ->get('facility')
            ->result();

        return $result;
    }

    public function legality()
    {
        $query = $this->db->where('kategori', 'legalitas')->get('settings')->row_array();
        return $query;
    }

    public function update_legalitas($data)
    {
        $this->db->where('kategori', 'legalitas');
        $this->db->update('settings', $data);

        $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Legality information has been successfully updated.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        // After that you need to used redirect function instead of load view such as 
        redirect("dash/settings");
    }

    public function faq($language)
    {
        $query = $this->db->select('question_' . $language . ' as question, answer_' . $language . ' as answer')->get('faq')->result();
        return $query;
    }
}
