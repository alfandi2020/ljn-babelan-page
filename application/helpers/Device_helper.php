<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('detect_device_type')) {
    function detect_device_type()
    {
        $CI = &get_instance();

        // Menggunakan JavaScript untuk mendeteksi lebar layar
        $screenWidth = $CI->input->get('screen_width') ?: $CI->input->post('screen_width') ?: 0;

        // Mendeteksi jenis perangkat berdasarkan lebar layar
        return $screenWidth < 200 ? 'Mobile' : ($screenWidth < 1024 ? 'Tablet' : 'Desktop');
    }
}
