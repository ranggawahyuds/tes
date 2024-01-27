<?php

function loginn()
{
    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        $ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses ditolak. Anda belum login!! </div>');
        if ($ci->uri->uri_string() !== 'admin/login') {
            redirect('admin/login');
        }
    } 
}
    