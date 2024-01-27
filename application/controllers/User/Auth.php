<?php

class Auth extends CI_Controller
{
    public $table = 'user';
    public $section = 'user';
   /*public function __construct()
    {
        parent::__construct();

        // Cek apakah pengguna sudah login
        if ($this->session->userdata('masuk')) {
            // Jika role-nya adalah 'siswa', redirect ke 'user/siswa'
            if ($this->session->userdata('role') == 'siswa') {
                redirect('usercontroller/registrasi_siswa');
            }
            // Jika role-nya adalah 'mahasiswa', redirect ke 'user/mahasiswa'
            elseif ($this->session->userdata('role') == 'mahasiswa') {
                redirect('usercontroller/registrasi_mahasiswa');
            }
            // Jika role-nya tidak ada atau tidak sesuai, lakukan pengalihan sesuai kebutuhan

        }
    }*/

    public function login()
    {

        $post = $this->input->post();
        $user = $post['username'];
        $pass = $post['password'];
        $validasi = $this->form_validation->set_rules($this->Validation->val_login());

        if ($validasi->run() == false) {
            $data = [
                'content' => 'user/login',
                'section' => $this->section,
            ];
            $this->load->view('template/login', $data);
        }

        // get user by username
        $get_user = $this->Model->get_by($this->table, 'username', $user)->row_array();
        if ($get_user == NULL) {
            $data = [
                'content' => 'user/login',
                'section' => $this->section,
            ];
            $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Username tidak ada! </div>');
            $this->load->view('user/login', $data);
        } else {
            $verify_password = password_verify($pass, $get_user['password']);

            if (!$verify_password) {
                $data = [
                    'content' => 'user/login',
                    'section' => $this->section,
                ];
                $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Password yang anda masukkan salah! </div>');
                $this->load->view('user/login', $data);
            } else {
                // setelah berhasil login
                $data = [
                    'id_user'	=> $get_user['id_user'],
                    'nama_lengkap'	=> $get_user['nama_lengkap'],
                    'username' => $get_user['username'],
                    'role'     => $get_user['role'], // Sesuaikan ini dengan kolom role pada tabel pengguna
                ];
                $this->session->set_userdata($data);
                
                // Cek kembali rolenya dan arahkan sesuai kebutuhan
                if ($get_user['role'] == 'Siswa') {
                    redirect('siswa/dashboard');
                } elseif ($get_user['role'] == 'Mahasiswa') {
                    redirect('mahasiswa/dashboard');
                } else {
                    redirect('user/login'); // Atau halaman lain sesuai kebutuhan
                }
            }
        }
    }
    public function logout()
    {
        session_destroy();
        redirect('user/login');
    }
}
