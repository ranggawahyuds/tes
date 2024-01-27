<?php
defined('BASEPATH') or exit('No script direct access allowed');

class Validation extends CI_Model
{

	public function val_login()
	{
		return [
			[
				'field'	=> 'username',
				'label'	=> 'Username',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => '<b>%s</b> harus diisi.'],
			],
			[
				'field'	=> 'password',
				'label'	=> 'Password',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => '<b>%s</b> harus diisi.']
			]
		];
	}

	public function val_user()
	{
		return [
			[
				'field'	=> 'nama_lengkap',
				'label'	=> 'Nama Lengkap',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => '<b>%s</b> tidak boleh kosong.']
			],
			[
				'field'	=> 'username',
				'label'	=> 'Username',
				'rules'	=> 'required|rtrim|is_unique[user.username]',
				'errors' => [
					'required' => '<b>%s</b> tidak boleh kosong.',
					'is_unique' => '<b>%s</b> sudah ada'
				]
			],
			[
				'field'	=> 'password',
				'label'	=> 'Password',
				'rules'	=> "required|rtrim|matches[confirm_password]|min_length[4]",
				'errors' => [
					'required'	=> '<b>%s</b> harus diisi',
					'matches'		=> '<b>Password</b> tidak cocok',
					'min_length' => 'Pangjang <b>%s<b/> minimal 4 karakter'
				],
			],
			[
				'field'	=> 'confirm_password',
				'label'	=> 'Password',
				'rules'	=> "required|rtrim",
			]
		];
	}

	public function val_registrasiMahasiswa()
	{
		return [
			[
				'field'	=> 'nama_lengkap',
				'label'	=> 'Nama Lengkap',
				'rules'	=> 'required|rtrim',
				'errors' => [
					'required' 	=> '<b>%s</b> tidak boleh kosong',
				]
			],
			[
				'field'	=> 'nim',
				'label'	=> 'Nim',
				'rules'	=> 'required|rtrim|min_length[6]',
				'errors' => [
					'required' => '<b>%s</b> tidak boleh kosong.',
					'min_length'	=> 'Minimal 6 digit'
				]
			],
			[
				'field'	=> 'anggota_kelompok',
				'label'	=> 'Jumlah Anggota Kelompok',
				'rules'	=> 'required|rtrim',
				'errors' => [
					'required' => '<b>%s</b> tidak boleh kosong.',
				]
			],
			[
				'field'	=> 'no_hp',
				'label'	=> 'No Telp',
				'rules'	=> 'required|rtrim',
				'errors' => [
					'required' => '<b>%s</b> tidak boleh kosong.',
				]
			],
			[
				'field'	=> 'program_studi',
				'label'	=> 'Program Studi',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => '<b>%s</b> tidak boleh kosong.']
			],
			[
				'field'	=> 'universitas',
				'label'	=> 'Asal Kampus',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => '<b>%s</b> tidak boleh kosong.']
			],
			[
				'field'	=> 'lama_magang',
				'label'	=> 'Lama Magang',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => '<b>%s</b> tidak boleh kosong.']
			],
		];
	}
	public function val_registrasiSiswa()
	{
		return [
			[
				'field'	=> 'nama_lengkap',
				'label'	=> 'Nama Lengkap',
				'rules'	=> 'required|rtrim',
				'errors' => [
					'required' 	=> '<b>%s</b> tidak boleh kosong',
				]
			],
			[
				'field'	=> 'nisn',
				'label'	=> 'Nisn',
				'rules'	=> 'required|rtrim|min_length[6]',
				'errors' => [
					'required' => '<b>%s</b> tidak boleh kosong.',
					'min_length'	=> 'Minimal 6 digit'
				]
			],
			[
				'field'	=> 'anggota_kelompok',
				'label'	=> 'Jumlah Anggota Kelompok',
				'rules'	=> 'required|rtrim',
				'errors' => [
					'required' => '<b>%s</b> tidak boleh kosong.',
				]
			],
			[
				'field'	=> 'no_hp',
				'label'	=> 'No Telp',
				'rules'	=> 'required|rtrim',
				'errors' => [
					'required' => '<b>%s</b> tidak boleh kosong.',
				]
			],
			[
				'field'	=> 'sekolah',
				'label'	=> 'Asal Sekolah',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => '<b>%s</b> tidak boleh kosong.']
			],
			[
				'field'	=> 'jurusan',
				'label'	=> 'Jurusan',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => '<b>%s</b> tidak boleh kosong.']
			],
			[
				'field'	=> 'lama_magang',
				'label'	=> 'Lama Magang',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => '<b>%s</b> tidak boleh kosong.']
			],
		];
	}
	public function val_ubahPas()
	{
		return [
			[
				'field'	=> 'password',
				'label'	=> 'Password',
				'rules'	=> "required|rtrim|matches[confirm_password]|min_length[4]",
				'errors' => [
					'required'	=> '<b>%s</b> harus diisi',
					'matches'		=> '<b>Password</b> tidak cocok',
					'min_length' => 'Pangjang <b>%s<b/> minimal 4 karakter'
				],
			],
			[
				'field'	=> 'confirm_password',
				'label'	=> 'Password',
				'rules'	=> "required|rtrim",
			]
		];
	}
}
