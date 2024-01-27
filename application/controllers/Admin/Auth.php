<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public $table   = 'user';
	public $section = 'Login';

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function login()
	{
		$post 		= $this->input->post();
		$user 		= $post['username'];
		$pass		= $post['password'];
		$validasi 	= $this->form_validation->set_rules($this->Validation->val_login());

		if ($validasi->run() == false) {
			$data = [
				'content' 	=> 'admin/login',
				'section'	=> $this->section,
			];
			$this->load->view('admin/login', $data);
		}

		// get user by username
		$get_user = $this->Model->get_by($this->table, 'username', $user)->row_array();
		if ($get_user == NULL) {
			$data = [
				'content' 	=> 'admin/login',
				'section'		=> $this->section,
			];
			$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">
			Username tidak ada! </div>');
			$this->load->view('admin/login', $data);
		} else {
			$verify_password = password_verify($pass, $get_user['password']);

			if (!$verify_password) {
				$data = [
					'content' 	=> 'admin/login',
					'section'	=> $this->section,
				];
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Password yang anda masukkan salah! </div>');
				$this->load->view('admin/login', $data);
			} else {
				$data = [
					'id_user'		=> $get_user['id_user'],
					'username'		=> $get_user['username'],
					'name'			=> $get_user['name'],
					'role'			=> $get_user['role']
				];
				$this->session->set_userdata($data);
				redirect('admin/dashboard');
			}	
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('admin/login');
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/admin/auth.php */