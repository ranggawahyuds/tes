<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public $table = 'user';
    public $section = 'User';
    public $folder  = 'adduser/';


    function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('id_user');
		if(empty($this->user_id) || $this->session->userdata('role') != 'admin')
		{
			$this->session->set_flashdata('info', '<script>swal({title: "Info", text: "Anda tidak berhak untuk masuk, harap login terlebih dahulu", timer: 5000, icon: "error", button: false});</script>');
        	redirect(base_url());
     	}
    }
    
    public function index()
    {
        $data = [
            'content' => $this->folder . 'view',
            'section' => $this->section,
            'user'    => $this->Model->get_all($this->table)->result()
        ];
        $this->load->view('template/template', $data);
    }

    public function add()
    {
        $data = [
            'content'    => $this->folder . ('adduser'),
            'section'    => $this->section
        ];
        $this->load->view('template/template', $data);
    }

    public function save()
    {
        $validasi     = $this->form_validation->set_rules($this->Validation->val_user());
        if ($validasi->run() == false) {
            $data = [
                'content'    => $this->folder . ('adduser'),
                'section'    => $this->section,
            ];
            $this->load->view('template/template', $data);
        } else {
            $post        = $this->input->post();
            $data = [
                'id_user'             => null,
                'nama_lengkap'            => $post['nama_lengkap'],
                'username'        => $post['username'],
                'password'        => password_hash($post['password'], PASSWORD_DEFAULT),
                'role'            => $post['role']
            ];
            $this->Model->save($this->table, $data);
            $this->session->set_flashdata('info', '<script>swal({title: "Info", text: "User Berhasil Ditambahkan", timer: 10000, icon: "success", button: false});</script>');
            redirect('admin/user/');
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        $id    =    str_replace(['-', '_', '~'], ['=', '+', '/'], $id);
        $id    =    $this->encryption->decrypt($id);

        $this->Model->delete($this->table, 'id_user', $id);
        $this->session->set_flashdata('info', '<script>swal({title: "Info", text: "User Berhasil Dihapus", timer: 10000, icon: "success", button: false});</script>');
        redirect('admin/user');
    }
    public function ubah_password()
    {
        $data = [
            'content' => 'admin/ubah_password',
            'section' => 'Ubah Password'
        ];
        $this->load->view('template/template', $data);
    }
    
    public function update()
    {
        $post = $this->input->post();
        $id = $this->session->userdata('id_user');
        $validasi = $this->form_validation->set_rules($this->Validation->val_ubahPas());

        if ($validasi->run() === false) {
            $data = [
                'content' => 'admin/ubah_password',
                'section' => 'Ubah Password',
            ];
            $this->load->view('template/template', $data);
            
        } else {
            $data = [
                'password' => password_hash($post['password'], PASSWORD_DEFAULT)
            ];
            $this->session->set_flashdata('info', '<script>swal({title: "Info", text: "Paswword berhasil di ganti", timer: 10000, icon: "success", button: false});</script>');
            $this->Model->update($this->table, 'id_user', $id, $data);
            redirect('admin/dashboard');
        }
    }
    public function reset($id = null) 
    {
        if (!isset($id)) show_404();
        $id    =    str_replace(['-', '_', '~'], ['=', '+', '/'], $id);
        $id    =    $this->encryption->decrypt($id);
        // Gantilah password pengguna dengan password default di sini
        $default_password = 'admin';
        $hashed_password = password_hash($default_password, PASSWORD_DEFAULT);

        $data = array(
            'password' => $hashed_password
        );

        $this->Model->update($this->table, 'id_user', $id, $data);
        $this->session->set_flashdata('info', '<script>swal({title: "Info", text: "Password telah di Reset", timer: 10000, icon: "success", button: false});</script>');
        redirect('admin/user/');
    }
}
