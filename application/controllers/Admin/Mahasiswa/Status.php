<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status extends CI_Controller
{
    public $section     = 'Data Status';
    public $table         = 'mahasiswa';
    public $folder        = 'mahasiswa/status/';

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
            'content'      => $this->folder . ('status'),
            'section'      => $this->section,
            'registrasi' => $this->Model->get_acdc()
        ];
        $this->load->view('template/template', $data);
    }

    public function detail($id = null)
	{
		if (!isset($id)) show_404();
		$id = str_replace(['-', '_', '~'], ['=', '+', '/'], $id);
		$id = $this->encryption->decrypt($id);
		$data = [
			'content' => $this->folder . ('detail'),
			'detail' => $this->Model->detailMahasiswa($id)
		];
		$this->load->view('template/template', $data);
	}

    public function edit($id = null)
	{
		$id = str_replace(['-', '_', '~'], ['=', '+', '/'], $id);
		$id = $this->encryption->decrypt($id);
		$data = [
			'content'	=> $this->folder . ('edit'),
			'section'	=> $this->section,
			'registrasi'	=> $this->Model->get_by($this->table, 'id', $id)->result()
		];
		$this->load->view('template/template', $data);
	}

	public function update()
	{
		$post = $this->input->post();

		$id = $post['id'];
		$id = str_replace(['-', '_', '~'], ['=', '+', '/'], $id);
		$id = $this->encryption->decrypt($id);

		$get_data 	= $this->Model->get_by($this->table, 'id', $id)->result_array();
		if (count($get_data) === 0) {
			show_404();
		}
		$is_unique_name = '';
		if ($post['nama_lengkap'] != $get_data[0]['nama_lengkap']) {
			$is_unique_name = '|is_unique[siswa.nama_lengkap]';
		}

		$this->form_validation->set_rules('nama_lengkap', 'Nama', 'required' . $is_unique_name, ['required' => 'from <b>%s</b> tidak boleh kosong']);
		$this->form_validation->set_rules('nim', 'Nim', 'required', ['required' => 'from <b>%s</b> tidak boleh kosong']);
		$this->form_validation->set_rules('universitas', 'Universitas', 'required', ['required' => 'from <b>%s</b> tidak boleh kosong']);
		$this->form_validation->set_rules('program_studi', 'Program Studi', 'required', ['required' => 'from <b>%s</b> tidak boleh kosong']);
		$this->form_validation->set_rules('no_hp', 'No Kontak', 'required', ['required' => 'from <b>%s</b> tidak boleh kosong']);

		if ($this->form_validation->run() == false) {
			$data = [
				'content' => $this->folder . ('edit'),
				'section' => $this->section,
				'registrasi' => $this->Model->get_by($this->table, 'id', $id)->result()
			];
			$this->load->view('template/template', $data);
		} else {
			$data = [
				'nama_lengkap'			 => $post['nama_lengkap'],
				'nim'			 => $post['nim'],
				'universitas'	 => $post['universitas'],
				'program_studi'  => $post['program_studi'],
				'no_hp'			 => $post['no_hp'],
				'mulai_magang' 	 => $post['mulai_magang'],
				'selesai_magang' => $post['selesai_magang'],
				'status'		 => $post['status'],
				'keterangan'		 => $post['keterangan'],
			];
			$this->Model->update($this->table, 'id', $id, $data);
			$this->session->set_flashdata('info', '<script>swal({title: "Info", text: "data sudah di update", timer: 10000, icon: "success", button: false});</script>');

			redirect('admin/mahasiswa/status');
		}
	}
}
