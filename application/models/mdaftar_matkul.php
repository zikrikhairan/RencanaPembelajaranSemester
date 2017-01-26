<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdaftar_matkul extends CI_Model {
    public function DaftarRPS(){	
		$query=$this->db->query('select rps.*, dosen.nama, mata_kuliah.nama_matkul, mata_kuliah.sks, mata_kuliah.semester from rps join dosen on dosen.nip=rps.nip_dosen_pengampu join mata_kuliah on mata_kuliah.kode_matkul=rps.kode_matkul where tahun = (select max(tahun) as tahun from rps)' );
		return $query->result_array();
	}
}

