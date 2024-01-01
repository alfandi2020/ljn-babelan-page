<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Visitor extends CI_Model
{
    public function addVisitor($data)
    {
        $this->db->insert('visitor_counter', $data);
    }

    public function updateCounter($data, $ipAddress)
    {
        $this->db->set($data);
        $this->db->where('ip_address', $ipAddress);
        $this->db->update('visitor_counter');
    }

    public function getTotalVisitors()
    {
        return $this->db->count_all('visitor_counter');
    }

    public function getVisitorByIp($ipAddress)
    {
        return $this->db->get_where('visitor_counter', ['ip_address' => $ipAddress])->row();
    }
}
