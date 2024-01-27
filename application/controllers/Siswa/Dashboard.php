<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public $folder = 'user/siswa/';
    public $section = 'Siswa';
    public $table = 'user';
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
            'content' => $this->folder . 'dashboard',
            'section' => $this->section,
            'pengajuan' => $this->UserModel->get_dataSiswa(),
            'profil' => $this->UserModel->getProfil()
        ];
        $this->load->view('user/siswa/template', $data);
    }

    public function update_foto()
    {
        $id = $this->input->post('id_user');
        $photo = $_FILES['photo']['name'];
        $config['upload_path'] = 'assets/photo';
        $config['allowed_types'] = 'jpg|png|JPG|JPEG|jpeg';
        $config['max_size']   = '320000';
     

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('photo')) {

            $data = [
                'content' => $this->folder . 'dashboard',
                'error'   => $this->upload->display_errors(),
                'section' => $this->section,
                'pengajuan' => $this->UserModel->get_dataSiswa(),
                'profil' => $this->UserModel->getProfil()
            ];
            $this->load->view('user/siswa/template', $data);
        } else {
            $photo = $this->upload->data();
            $data = [
                'id_user'        => $id,
                'photo'     => $photo['file_name']
            ];
            $this->Model->update($this->table, 'id_user', $id, $data);
            $this->session->set_flashdata('info', '<script>swal({title: "Info", text: "Berhasil menambahkan foto", timer: 10000, icon: "success", button: false});</script>');
            redirect('siswa/dashboard');
        }
    }
}
