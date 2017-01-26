<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdaftarmatkul extends CI_Model {
	public function Insert($namatabel, $data){
		$query = $this->db->insert($namatabel, $data);
		return $query->result_array();
	}
	public function GetRPS(){
		$query = $this->db->query('select * from rps');
		return $query->result_array();
	}
	public function GetMataKuliah(){
		$query = $this->db->query('select * from mata_kuliah');
		return $query->result_array();
	}
	public function GetNamaMataKuliah($kode){
		$query = $this->db->query('select * from mata_kuliah where kode_matkul = "'.$kode.'"');
		return $query->result_array();
	}
	public function GetDosen(){
		$query = $this->db->query('select * from dosen');
		return $query->result_array();
	}
	public function GetTahun(){
		$query = $this->db->query('select * from tahun order by tahun desc');
		return $query->result_array();
	}
	public function GetIDRPS($dosen, $kode_matkul, $tahun){
		$query = $this->db->query('select id_rps from rps where nip_dosen_pengampu = '.$dosen.' && kode_matkul = "'.$kode_matkul.'" && tahun="'.$tahun.'"');
		return $query->result_array();
	}
	public function GetCP(){
		$query = $this->db->query('select * from capaian_pembelajaran');
		return $query->result_array();
	}
	public function GetNA(){
		$query = $this->db->query('select * from norma_akademik');
		return $query->result_array();
	}
	public function GetP(){
		$query = $this->db->query('select * from penilaian');
		return $query->result_array();
	}
	public function GetRP(){
		$query = $this->db->query('select * from rencana_pembelajaran');
		return $query->result_array();
	}
	public function GetR(){
		$query = $this->db->query('select * from referensi');
		return $query->result_array();
	}
}