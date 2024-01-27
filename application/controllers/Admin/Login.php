<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public $section 	= 'Login';

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username')) {
			redirect('admin/dashboard');
		}
	}

	public function index()
	{
		$data = [
			'content' 	=> 'admin/login',
			'section'	=> $this->section,
		];
		$this->load->view('admin/login', $data);
	}
}
