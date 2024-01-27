<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

    public function dataMahasiswa()
    {
        $data = $this->Model->dataMahasiswa();

        $response = array();

        foreach ($data as $hasil) {

            $response[] = array(
                'nama lengkap' => $hasil['nama_lengkap'],
                'nim'     => $hasil['nim'],
                'no hp'  => $hasil['no_hp'],
                'program studi' => $hasil['program_studi'],
                'universitas' => $hasil['universitas'],
                'lama magang' => $hasil['lama_magang'],
                'status' => $hasil['status'],
                'surat pengantar' => $hasil['surat'],
                'keterangan' => $hasil['keterangan'],
                'mulai magang' => $hasil['mulai_magang'],
                'selesai magang' => $hasil['selesai_magang']
            );
        }

        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Data Mahasiswa',
                'data'    => $response
            )
        );
    }

    public function dataSiswa()
    {
        $data = $this->Model->dataSiswa();

        $response = array();

        foreach ($data as $hasil) {

            $response[] = array(
                'nama lengkap' => $hasil['nama_lengkap'],
                'nisn'     => $hasil['nisn'],
                'no hp'  => $hasil['no_hp'],
                'jurusan' => $hasil['jurusan'],
                'sekolah' => $hasil['sekolah'],
                'lama magang' => $hasil['lama_magang'],
                'status' => $hasil['status'],
                'surat pengantar' => $hasil['surat'],
                'keterangan' => $hasil['keterangan'],
                'mulai magang' => $hasil['mulai_magang'],
                'selesai magang' => $hasil['selesai_magang']
            );
        }

        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Data Siswa',
                'data'    => $response
            )
        );
    }

    public function detailMahasiswa($id)
    {
        //get ID siswa from URL
        $id = $this->uri->segment(3);

        $hasil = $this->Model->detail_mahasiswa($id)->row();

        if ($hasil) {

            header('Content-Type: application/json');
            echo json_encode(
                array(
                    'success' => true,
                    'message' => 'Detail Mahasiswa',
                    'data'    => array(
                        'nama lengkap' => $hasil->nama_lengkap,
                        'nim'     => $hasil->nim,
                        'no hp'  => $hasil->no_hp,
                        'program_studi' => $hasil->program_studi,
                        'universitas' => $hasil->universitas,
                        'lama magang' => $hasil->lama_magang,
                        'status' => $hasil->status,
                        'surat pengantar' => $hasil->surat,
                        'keterangan' => $hasil->keterangan,
                        'mulai magang' => $hasil->mulai_magang,
                        'selesai magang' => $hasil->selesai_magang
                    )   
                )
            );
        } else {

            header('Content-Type: application/json');
            echo json_encode(
                array(
                    'success' => false,
                    'message' => 'Data Mahasiswa Tidak Ditemukan!'
                )
            );
        }
    }

    public function detailSiswa($id)
    {
        //get ID siswa from URL
        $id = $this->uri->segment(3);

        $hasil = $this->Model->detail_siswa($id)->row();

        if ($hasil) {

            header('Content-Type: application/json');
            echo json_encode(
                array(
                    'success' => true,
                    'message' => 'Detail Siswa',
                    'data'    => array(
                        'nama siswa' => $hasil->nama_lengkap,
                        'nisn'     => $hasil->nisn,
                        'no hp'  => $hasil->no_hp,
                        'jurusan' => $hasil->jurusan,
                        'sekolah' => $hasil->sekolah,
                        'lama magang' => $hasil->lama_magang,
                        'status' => $hasil->status,
                        'surat pengantar' => $hasil->surat,
                        'keterangan' => $hasil->keterangan,
                        'mulai magang' => $hasil->mulai_magang,
                        'selesai magang' => $hasil->selesai_magang
                    )   
                )
            );
        } else {

            header('Content-Type: application/json');
            echo json_encode(
                array(
                    'success' => false,
                    'message' => 'Data Siswa Tidak Ditemukan!'
                )
            );
        }
    }

    public function data()
    {
        $mahasiswa_pending = $this->Model->get_dataMahasiswa(['status' => 'pending'])->num_rows();
        $mahasiswa_magang = $this->Model->get_dataMahasiswa(['status' => 'disetujui'])->num_rows();
        $mahasiswa_selesai =$this->Model->get_dataMahasiswa(['status' => 'selesai'])->num_rows();
        $siswa_pending = $this->Model->get_dataSiswa(['status' => 'pending'])->num_rows();
        $siswa_magang = $this->Model->get_dataSiswa(['status' => 'disetujui'])->num_rows();
        $siswa_selesai = $this->Model->get_dataSiswa(['status' => 'selesai'])->num_rows();

        $response = array(
            'Mahasiswa Pending' => $mahasiswa_pending,
            'Mahasiswa Magang'     => $mahasiswa_magang,
            'Mahasiswa Selesai' => $mahasiswa_selesai,
            'Siswa Pending' => $siswa_pending,
            'Siswa Magang'     => $siswa_magang,
            'Siswa Selesai' => $siswa_selesai

        );
        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Total Data',
                'data'    => $response
            )
        );
    }

}
