<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mperiksarps extends CI_Model {
    public function RPS(){	
		$query=$this->db->query('select rps.*, dosen.nama, mata_kuliah.nama_matkul, mata_kuliah.sks, mata_kuliah.semester from rps join dosen on dosen.nip=rps.nip_dosen_pengampu join mata_kuliah on mata_kuliah.kode_matkul=rps.kode_matkul where tahun = (select max(tahun) as tahun from rps)' );
		return $query->result_array();
	}
	public function GetRPS($where = ""){	
		$query=$this->db->query('select rps.id_rps, rps.matkul_prasyarat, rps.latar_belakang, rps.deskripsi, rps.tujuan, rps.pokok_bahasan, rps.kode_matkul, dosen.nama, mata_kuliah.nama_matkul, mata_kuliah.sks, mata_kuliah.semester, tahun.tahun from rps join dosen on dosen.nip=rps.nip_dosen_pengampu join mata_kuliah on mata_kuliah.kode_matkul=rps.kode_matkul join tahun on rps.tahun=tahun.id where rps.tahun = (select max(tahun) as tahun from rps)'.$where );
		return $query->result_array();
	}
	public function GetCP($where = ""){
		$query = $this->db->query('select * from capaian_pembelajaran'.$where);
		return $query->result_array();
	}
	public function GetNA($where = ""){
		$query = $this->db->query('select * from norma_akademik'.$where);
		return $query->result_array();
	}
	public function GetP($where = ""){
		$query = $this->db->query('select * from penilaian'.$where);
		return $query->result_array();
	}
	public function GetRP($where = ""){
		$query = $this->db->query('select * from rencana_pembelajaran'.$where);
		return $query->result_array();
	}
	public function GetR($where = ""){
		$query = $this->db->query('select * from referensi'.$where);
		return $query->result_array();
	}

	public function GetRPS2($where = ""){	
		$query=$this->db->query('select rps.id_rps, rps.matkul_prasyarat, rps.latar_belakang, rps.deskripsi, rps.tujuan, rps.pokok_bahasan, rps.kode_matkul, dosen.nama, mata_kuliah.nama_matkul, mata_kuliah.sks, mata_kuliah.semester, tahun.tahun from rps join dosen on dosen.nip=rps.nip_dosen_pengampu join mata_kuliah on mata_kuliah.kode_matkul=rps.kode_matkul join tahun on rps.tahun=tahun.id where rps.tahun = (select max(tahun) as tahun from rps)-1'.$where );
		return $query->result_array();
	}
	public function GetCP2($where = ""){
		$query = $this->db->query('select * from capaian_pembelajaran'.$where);
		return $query->result_array();
	}
	public function GetNA2($where = ""){
		$query = $this->db->query('select * from norma_akademik'.$where);
		return $query->result_array();
	}
	public function GetP2($where = ""){
		$query = $this->db->query('select * from penilaian'.$where);
		return $query->result_array();
	}
	public function GetRP2($where = ""){
		$query = $this->db->query('select * from rencana_pembelajaran'.$where);
		return $query->result_array();
	}
	public function GetR2($where = ""){
		$query = $this->db->query('select * from referensi'.$where);
		return $query->result_array();
	}
}

