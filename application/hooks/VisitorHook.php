<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VisitorHook
{
    public function countVisitor()
    {
        $CI = &get_instance();

        // Mendapatkan alamat IP pengunjung
        $ipAddress = $CI->input->ip_address();

        // Load model
        $CI->load->model('M_Visitor');

        // Cek apakah pengunjung sudah ada dalam database
        $existingVisitor = $CI->M_Visitor->getVisitorByIp($ipAddress);

        // print_r($existingVisitor);
        // exit;

        if ($existingVisitor) {
            // Jika pengunjung sudah ada, update counter
            $counterData = array(
                'counter' => $existingVisitor->counter + 1,
                'last_visit' => date('Y-m-d H:i:s')
            );
            $CI->M_Visitor->updateCounter($counterData, $ipAddress);
        } else {
            // Jika pengunjung belum ada, tambahkan ke database
            $newVisitorData = array(
                'ip_address' => $ipAddress,
                'counter' => 1,
                'last_visit' => date('Y-m-d H:i:s')
            );
            $CI->M_Visitor->addVisitor($newVisitorData);
        }
    }
}
