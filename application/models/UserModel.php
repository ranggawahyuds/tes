<?php

class UserModel extends CI_Model
{

    public function get_dataSiswa()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('siswa', 'siswa.id_user = user.id_user');
        $this->db->where('user.id_user', $id);

        $query = $this->db->get();
        return $query->result();
    }
    public function get_dataMahasiswa()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('mahasiswa', 'mahasiswa.id_user = user.id_user');
        $this->db->where('user.id_user', $id);

        $query = $this->db->get();
        return $query->result();
    }
    
    public function getProfil()
	{
		$id = $this->session->userdata('id_user');
		$this->db->select('photo');
		$this->db->from('user');
		$this->db->where('id_user', $id);

		$query = $this->db->get();
		return $query->result();
	}
}
