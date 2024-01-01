<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Student extends CI_Model
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
        $query = $this->db->select('nomor_urut, nama, jenis_kelamin, slug, created_at, file_cv')->order_by('nomor_urut', 'DESC')->get('siswa')->result();
        return $query;
    }

    public function download_by_range($date_range)
    {
        $query = $this->db->where($date_range)->order_by('nama', 'ASC')->get('siswa')->result();

        return $query;
    }

    public function list_dashboard()
    {
        $query = $this->db->select('nama_program_id as nama_program, slug, nama_program_singkat_id')->order_by('nama_program_id', 'ASC')->get('program')->result();

        return $query;
    }
}
