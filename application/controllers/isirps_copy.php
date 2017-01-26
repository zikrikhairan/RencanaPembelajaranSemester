<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IsiRPS_copy extends CI_Controller {
	function __construct()
    {
        parent::__construct();
    }
    public function index()
	{
		$this->load->view('isirps_copy');
	}
	function copyrps($idrps){
		$this->load->model("misirps");
		$datas=$this->misirps->GetRPRPS("where rps.id_rps='$idrps'");
		$data["datarprps"] = $datas;
		$kodemakul=$data1[0]['kode_matkul'];
		$data1=$this->misirps->GetRPSOLD("rps.id_rps='$idrps'");
		$data["rpsold"] = $data1;
		print_r($data1);
		echo "shudkfhusuahfuausiiuasdui";
		$data0=$this->misirps->GetRPSNEW("rps.kode_matkul='$kodemakul'");
		$data["rpsnew"] = $data0;
		$data3=$this->misirps->GetDosen("id_rps='$idrps'");
		$data["dosen"] = $data3;
		$data4=$this->misirps->GetCapaianPembelajaran("rps.id_rps='$idrps'");
		$data["datacp"] = $data4;
		$data5=$this->misirps->GetPenilaian("rps.id_rps='$idrps'");
		$data["datap"] = $data5;
		$data6=$this->misirps->GetNormaAkademik("rps.id_rps='$idrps'");
		$data["datana"] = $data6;
		$data7=$this->misirps->GetReferensi("rps.id_rps='$idrps'");
		$data["datar"] = $data7;
		$this->load->view('isirps_copy', $data);
	}
	function updaterprps(){
		$id=$_POST['id'];
		$cp=$_POST['capaian_pembelajaran'];
		$pb=$_POST['pokok_bahasan'];
		$spb=$_POST['sub_pokok_bahasan'];
		$mp=$_POST['metode_pembelajaran'];
		$ydm=$_POST['yang_dilakukan_mahasiswa'];
		$ydd=$_POST['yang_dilakukan_dosen'];
		for($i = 0; $i<count($cp); $i++) {
			$data_update = array(
				'capaian_pembelajaran' => $cp[$i],
				'pokok_bahasan' => $pb[$i],
				'sub_pokok_bahasan' => $spb[$i],
				'metode_pembelajaran' => $mp[$i],
				'yang_dilakukan_mahasiswa'=> $ydm[$i],
				'yang_dilakukan_dosen' => $ydd[$i]
			);
			$where=array('id' => $id[$i]);
			$save=$this->misirps->Update('rencana_pembelajaran', $data_update, $where);
		}
		$idrps=$_POST['id_rps'];
		$lb=$_POST['latar_belakang'];
		$deskripsi=$_POST['deskripsi'];
		$tujuan=$_POST['tujuan'];
		$rpb=$_POST['rps_pokok_bahasan'];
		$data_update = array(
			'latar_belakang' => $lb,
			'deskripsi' => $deskripsi,
			'tujuan' => $tujuan,
			'pokok_bahasan' => $rpb
			);
		$where=array('id_rps' => $idrps);
		$save=$this->misirps->Update('rps', $data_update, $where);
		$rcp=$_POST['rps_capaian_pembelajaran'];
		$data_update = array(
			'capaian' => $rcp
			);
		$where=array('id_rps' => $idrps);
		$save=$this->misirps->Update('capaian_pembelajaran', $data_update, $where);
		$na=$_POST['norma_akademik'];
		$data_update = array(
			'norma' => $na
			);
		$where=array('id_rps' => $idrps);
		$save=$this->misirps->Update('norma_akademik', $data_update, $where);
		$ref=$_POST['referensi'];
		$data_update = array(
			'referensi' => $ref
			);
		$where=array('id_rps' => $idrps);
		$save=$this->misirps->Update('referensi', $data_update, $where);
		$idph=$_POST['idph'];
		$penhasnama=$_POST['penilaianhasil_nama'];
		$penhaspersen=$_POST['penilaianhasil_persentase'];
		$daad=4;
		for($i = 0; $i<count($penhasnama); $i++) {
			$data_update = array(
				'nama' => $penhasnama[$i],
				'persentase' => $penhaspersen[$i]
			);
			$where=array('id' => $idph[$i]);
			$save=$this->misirps->Update('penilaian', $data_update, $where);
		}
		$idpp=$_POST['idpp'];
		$penpronama=$_POST['penilaianproses_nama'];
		$penpropersen=$_POST['penilaianproses_persentase'];
		for($i = 0; $i<count($penpronama); $i++) {
			$data_update = array(
				'nama' => $penpronama[$i],
				'persentase' => $penpropersen[$i]
			);
			$where=array('id' => $idpp[$i]);
			$save=$this->misirps->Update('penilaian', $data_update, $where);
		}
		if(empty($_POST['penilaianhasil_namabaru']) || empty($_POST['penilaianproses_namabaru'])){
			echo "tidak ada penilian tambahan";
		}
		else{
			$penhasnamabaru=$_POST['penilaianhasil_namabaru'];
			$penhaspersenbaru=$_POST['penilaianhasil_persentasebaru'];
			for($i = 0; $i<count($penhasnamabaru); $i++) {
				$data_insert = array(
					'id_rps' => $idrps,
					'nama' => $penhasnamabaru[$i],
					'persentase' => $penhaspersenbaru[$i],
					'jenis' => 1
				);
				$save=$this->misirps->Insert('penilaian', $data_insert);
			}
			$penpronamabaru=$_POST['penilaianproses_namabaru'];
			$penpropersenbaru=$_POST['penilaianproses_persentasebaru'];
			for($i = 0; $i<count($penpronamabaru); $i++) {
				$data_insert = array(
					'id_rps' => $idrps,
					'nama' => $penpronamabaru[$i],
					'persentase' => $penpropersenbaru[$i],
					'jenis' => 2
				);
				$save=$this->misirps->Insert('penilaian', $data_insert);
			}
		}
		print_r($_POST);
	}
}

