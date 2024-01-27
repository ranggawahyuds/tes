<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public $section 	= 'Login';

	function __construct()
	{
		parent::__construct();
		// Check if the user is already logged in
		if ($this->session->userdata('id_user')) {
			// User is logged in, redirect to the appropriate dashboard
			if ($this->session->userdata('role') == 'Siswa') {
				redirect('siswa/dashboard');
			} elseif ($this->session->userdata('role') == 'Mahasiswa') {
				redirect('mahasiswa/dashboard');
			}
		}
	}
	public function index()
	{
		$data = [
			'content' 	=> 'user/login',
			'section'	=> $this->section,
		];
		$this->load->view('user/login', $data);
	}
}
