<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public $folder = 'user/mahasiswa/';
    public $section = 'Mahasiswa';

    public $table = 'user';

    function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('id_user');
		if(empty($this->user_id) || $this->session->userdata('role') != 'Mahasiswa')
		{
			$this->session->set_flashdata('info', '<script>swal({title: "Info", text: "Akses Ditolak", timer: 5000, icon: "error", button: false});</script>');
        	redirect(base_url());
     	}
	}

    public function ubah_password()
    {
        $data = [
            'content' => $this->folder .'ubah_password',
            'section' => $this->section,
        ];
        $this->load->view('user/mahasiswa/template', $data);
    }
    public function update()
    {
        $post = $this->input->post();
        $id = $this->session->userdata('id_user');
        $validasi = $this->form_validation->set_rules($this->Validation->val_ubahPas());

        if ($validasi->run() === false) {
            $data = [
                'content' => $this->folder . 'ubah_password',
                'section' => $this->section,
            ];
            $this->load->view('user/mahasiswa/template', $data);
            
        } else {
            $data = [
                'password' => password_hash($post['password'], PASSWORD_DEFAULT)
            ];
            $this->session->set_flashdata('info', '<script>swal({title: "Info", text: "Paswword berhasil di ganti", timer: 10000, icon: "success", button: false});</script>');
            $this->Model->update($this->table, 'id_user', $id, $data);
            redirect('mahasiswa/dashboard');
        }
    }
}
