<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public $folder = 'user/siswa/';
    public $table  = 'siswa';
    public $section = 'Pengajuan';

    function __construct()
    {
        parent::__construct();
		$this->user_id = $this->session->userdata('id_user');
		if(empty($this->user_id) || $this->session->userdata('role') != 'Siswa')
		{
			$this->session->set_flashdata('info', '<script>swal({title: "Info", text: "Akses Ditolak", timer: 5000, icon: "error", button: false});</script>');
        	redirect(base_url());
     	}
    }

    public function index()
    {
        $data = [
            'content' => $this->folder . 'pengajuan',
            'section' => $this->section
        ];
        $this->load->view('user/siswa/template', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->form_validation->set_rules($this->Validation->val_registrasiSiswa());

        if ($this->form_validation->run() == false) {
            
            $data = [
                'content' => $this->folder . ('pengajuan'),
                'section' => $this->section,
            ];
            $this->load->view('user/siswa/template', $data);
        } else {
            $config['upload_path'] = 'assets/suratpengantar/';
            $config['allowed_types'] = 'pdf';
            $config['max_size']   = '320000';

            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('surat')) {
                $data = [
                    'content' => $this->folder . ('pengajuan'),
                    'section' => $this->section,
                    'error'   => $this->upload->display_errors(),
                ];
                $this->load->view('user/siswa/template', $data);
            } else {
                $surat = $this->upload->data();
                $data = [
                    'id_user'        => $post['id_user'],
                    'nama_lengkap'   => $post['nama_lengkap'],
                    'nisn'           => $post['nisn'],
                    'anggota_kelompok' => $post['anggota_kelompok'],
                    'no_hp'          => $post['no_hp'],
                    'jurusan'        => $post['jurusan'],
                    'sekolah'        => $post['sekolah'],
                    'lama_magang'    => $post['lama_magang'],
                    'status'         => 'pending',
                    'surat'          => $surat['file_name'],

                ];
                $this->Model->save($this->table, $data);
                $this->session->set_flashdata('info', '<script>swal({title: "Info", text: "Berhasil menambahkan pengajuan", timer: 10000, icon: "success", button: false});</script>');
                redirect(base_url('siswa/dashboard'));
            }
        }
    }
    /*private function upload_file($input_name, $upload_path)
    {
        $config['upload_path']   = $upload_path;
        $config['allowed_types'] = 'pdf|png|jpg|jpeg'; // Allow any file type, adjust as needed
        $config['max_size']      = 2048;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload($input_name)) {
            return false;
        } else {
            $upload_data = $this->upload->data();
            return $upload_data['file_name'];
        }
    }*/
}
