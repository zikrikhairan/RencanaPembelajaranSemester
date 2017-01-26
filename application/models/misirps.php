<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Misirps extends CI_Model {
    public function GetRPS(){	
		$username = $this->session->userdata('u_name');
		$query=$this->db->query('select rps.*, mata_kuliah.nama_matkul from rps join mata_kuliah on rps.kode_matkul = mata_kuliah.kode_matkul where nip_dosen_pengampu = '.$username.' && tahun = (select max(tahun) as tahun from rps)' );
		return $query->result_array();
	}
	public function GetRPSOLD($where = ""){
		$username = $this->session->userdata('u_name');
		$query=$this->db->query('select rps.*, mata_kuliah.nama_matkul, mata_kuliah.semester, mata_kuliah.sks, mata_kuliah.status from rps join mata_kuliah on mata_kuliah.kode_matkul = rps.kode_matkul where nip_dosen_pengampu = '.$username.' && tahun = (select max(tahun) as tahun from rps)-1 && '.$where ) ;
		return $query->result_array();
	}
	public function GetRPSNEW($where = ""){
		$username = $this->session->userdata('u_name');
		$query=$this->db->query('select * from rps where tahun = (select max(tahun) as tahun from rps) && '.$where ) ;
		return $query->result_array();
	}
	public function GetDosen($where = ""){	
		$username = $this->session->userdata('u_name');
		$query=$this->db->query('select dosen.nama, rps.tahun from rps join dosen on dosen.nip=rps.nip_dosen_pengampu where nip_dosen_pengampu = '.$username.' && '.$where.' && tahun = (select max(tahun) as tahun from rps)' );
		return $query->result_array();
	}
	public function GetCapaianPembelajaran($where = ""){	
		$username = $this->session->userdata('u_name');
		$query=$this->db->query('select rps.tahun, capaian_pembelajaran.id, capaian_pembelajaran.capaian from rps join dosen on dosen.nip=rps.nip_dosen_pengampu join capaian_pembelajaran on capaian_pembelajaran.id_rps = rps.id_rps where nip_dosen_pengampu = '.$username.' && '.$where );
		return $query->result_array();
	}
	public function GetPenilaian($where = ""){	
		$username = $this->session->userdata('u_name');
		$query=$this->db->query('select penilaian.id, penilaian.nama, penilaian.persentase, penilaian.jenis from rps join dosen on dosen.nip=rps.nip_dosen_pengampu join penilaian on penilaian.id_rps = rps.id_rps where nip_dosen_pengampu = '.$username.' && '.$where );
		return $query->result_array();
	}
	public function GetNormaAkademik($where = ""){	
		$username = $this->session->userdata('u_name');
		$query=$this->db->query('select norma_akademik.id, norma_akademik.norma from rps join dosen on dosen.nip=rps.nip_dosen_pengampu join norma_akademik on norma_akademik.id_rps = rps.id_rps where nip_dosen_pengampu = '.$username.' && '.$where );
		return $query->result_array();
	}
	public function GetReferensi($where = ""){	
		$username = $this->session->userdata('u_name');
		$query=$this->db->query('select referensi.id, referensi.referensi from rps join dosen on dosen.nip=rps.nip_dosen_pengampu join referensi on referensi.id_rps = rps.id_rps where nip_dosen_pengampu = '.$username.' && '.$where );
		return $query->result_array();
	}
	public function GetDataRPS($where = ""){
		$query=$this->db->query('select rps.*, mata_kuliah.nama_matkul, mata_kuliah.sks, mata_kuliah.status, mata_kuliah.semester FROM rps JOIN mata_kuliah ON mata_kuliah.kode_matkul = rps.kode_matkul '.$where.' && tahun = (select max(tahun) as tahun from rps)');
		return $query->result_array();
	}
	public function GetDataRPSOLD($where = ""){
		$query=$this->db->query('select rps.*, mata_kuliah.nama_matkul, mata_kuliah.sks, mata_kuliah.status FROM rps JOIN mata_kuliah ON mata_kuliah.kode_matkul = rps.kode_matkul '.$where.' && tahun = (select max(tahun) as tahun from rps)-1');
		return $query->result_array();
	}
	public function GetRPRPS($where = ""){
		$query=$this->db->query('select rencana_pembelajaran.id, rps.id_rps, rencana_pembelajaran.minggu_ke, rencana_pembelajaran.capaian_pembelajaran, rencana_pembelajaran.pokok_bahasan, rencana_pembelajaran.sub_pokok_bahasan, rencana_pembelajaran.metode_pembelajaran, rencana_pembelajaran.yang_dilakukan_mahasiswa, rencana_pembelajaran.yang_dilakukan_dosen from rencana_pembelajaran JOIN rps ON rps.id_rps = rencana_pembelajaran.id_rps '.$where);
		return $query->result_array();
	}
	public function GetTahun($where = ""){
		$query=$this->db->query('select tahun.tahun from rps JOIN tahun ON rps.tahun = tahun.id '.$where);
		return $query->result_array();
	}
	public function Update($namatabel, $data, $where){
		$query = $this->db->update($namatabel, $data, $where);
		return $query;
	}
	public function Insert($namatabel, $data){
		$query = $this->db->insert($namatabel, $data);
		return $query;
	}
}

