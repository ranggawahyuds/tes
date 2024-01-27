<?php

class Model extends CI_Model
{


	public function get_all($table)
	{
		return $this->db->get($table);
	}

	public function get_by($table, $id, $where)
	{
		return $this->db->get_where($table, [$id => $where]);
	}
	public function get_dataSiswa($where = null)
	{
		return $this->db->get_where('siswa', $where);
	}
	public function get_dataMahasiswa($where = null)
	{
		return $this->db->get_where('mahasiswa', $where);
	}
	public function save($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function delete($table, $pk, $where)
	{
		$this->db->delete($table, [$pk => $where]);
	}

	public function update($table, $id, $where, $data)
	{
		$update = $this->db->update($table, $data, [$id => $where]);
		return $update;
	}	
	public function get_acdc()
	{
		$status = array('disetujui', 'ditolak');
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where_in('status', $status);

		$query = $this->db->get();
		return $query->result();
	}
	public function get_selesai()
	{
		$status = 'selesai';
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('status', $status);
		
		$query = $this->db->get();
		return $query->result();
	}
	public function get_pending()
	{
		$status = 'pending';
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('status', $status);
		
		$query = $this->db->get();
		return $query->result();
	}
	public function detailMahasiswa($id) {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('user', 'user.id_user = mahasiswa.id_user');
        $this->db->where('mahasiswa.id', $id);
        $this->db->limit(1);

        $query = $this->db->get();
        return $query->result();
    }
	public function get_acdcSiswa()
	{
		$status = array('disetujui', 'ditolak');
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where_in('status', $status);
		
		$query = $this->db->get();
		return $query->result();
	}
	public function get_pendingsiswa()
	{
		$status = 'pending';
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('status', $status);
		
		$query = $this->db->get();
		return $query->result();
	}
	public function get_selesaiSiswa()
	{
		$status = 'selesai';
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('status', $status);
		
		$query = $this->db->get();
		return $query->result();
	}
	public function detailSiswa($id) {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('user', 'user.id_user = siswa.id_user');
        $this->db->where('siswa.id', $id);
        $this->db->limit(1);

        $query = $this->db->get();
        return $query->result();
    }

	public function pending()
	{
		$this->db->from('mahasiswa');
        $this->db->where('status', 'pending');
        $count_mahasiswa = $this->db->count_all_results();

        // Hitung jumlah data pending dari tabel siswa
        $this->db->from('siswa');
        $this->db->where('status', 'pending');
        $count_siswa = $this->db->count_all_results();

        // Jumlahkan hasil dari kedua tabel
        return $count_mahasiswa + $count_siswa;
	}

	public function dataMahasiswa() {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('user', 'user.id_user = mahasiswa.id_user');
        $query = $this->db->get();
        return $query->result_array();
    }
	public function dataSiswa() {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('user', 'user.id_user = siswa.id_user');
        $query = $this->db->get();
        return $query->result_array();
    }

	public function detail_siswa($id) {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('user', 'user.id_user = siswa.id_user');
        $this->db->where('siswa.id', $id);
        
        return $this->db->get();
    }
	public function detail_mahasiswa($id) {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('user', 'user.id_user = mahasiswa.id_user');
        $this->db->where('mahasiswa.id', $id);
        
        return $this->db->get();
    }

}
