<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public $section 	= 'Dashboard';
	public $table       = 'mahasiswa';
	public $folder      = 'admin/';

	function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('username');
		if(empty($this->user_id) || $this->session->userdata('role') != 'admin')
		{
			$this->session->set_flashdata('info', '<script>swal({title: "Info", text: "Anda tidak berhak untuk masuk, harap login terlebih dahulu", timer: 5000, icon: "error", button: false});</script>');
        	redirect(base_url());
     	}
	}
	public function index()
	{
		$data = [
			'content' 	=> $this->folder . ('dashboard'),
			'section'	=> $this->section,
		];
		$this->load->view('template/template', $data);
	}
}
