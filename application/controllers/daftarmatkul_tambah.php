<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DaftarMatKul_Tambah extends CI_Controller {
    public function index()
	{
		$this->load->model("mdaftarmatkul");
		$data1=$this->mdaftarmatkul->GetRPS();
		$data["rps"] = $data1;
		$data2=$this->mdaftarmatkul->GetDosen();
		$data["dosen"] = $data2;
		$data3=$this->mdaftarmatkul->GetMataKuliah();
		$data["matkul"] = $data3;
		$data4=$this->mdaftarmatkul->GetTahun();
		$data["tahun"] = $data4;
		$this->load->view('daftarmatkul_tambah', $data);
	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
    function insert(){
    	$this->load->model("mdaftarmatkul");
		$tahun=$_POST['tahun'];
		$kode=$_POST['kode_matkul'];
		$data2=$this->mdaftarmatkul->GetNamaMataKuliah($kode);
		$nama=$data2[0]['nama_matkul'];
		$nip=$_POST['nip'];
		$datarps=$this->mdaftarmatkul->GetRPS();
		$isi;
		for ($i=0; $i<count($datarps); $i++){
			if($datarps[$i]['kode_matkul']==$kode && $datarps[$i]['tahun']==$tahun){
				$isi=0;
			}
			else{
				$isi=1;
			}
		}
		if($isi=1){
			$data_insert = array(
				'nip_dosen_pengampu' => $nip,
				'kode_matkul' => $kode,
				'tahun' => $tahun
			);
			$save=$this->misirps->Insert('rps', $data_insert);
		}
		$data=array(
			'nip' => $nip,
			'kode' => $kode,
			'tahun' => $tahun
		);
		$this->session->set_flashdata('tambahtabel',$data);
		redirect('daftarmatkul_tambah/tambahtabel','refresh', $data);
    }
    function tambahtabel(){
    	$data=$this->session->flashdata('tambahtabel');
    	$this->load->model("mdaftarmatkul");
    	$isi;
    	$nip=$data['nip'];
    	$kode=$data['kode'];
    	$tahun=$data['tahun'];
		$data2=$this->mdaftarmatkul->GetIDRPS($nip, $kode, $tahun);
		$data3=$data2[0]['id_rps'];

		$datacp=$this->mdaftarmatkul->GetCP();
		for ($i=0; $i<count($datacp); $i++){
			if($datacp[$i]['id_rps']==$data3){
				$isi=0;
			}
			else{
				$isi=1;
			}
		}
		if($isi=1){
			$data_insert = array(
				'id_rps' => $data3
			);
			$save=$this->misirps->Insert('capaian_pembelajaran', $data_insert);	
		}
		$datana=$this->mdaftarmatkul->GetNA();
		for ($i=0; $i<count($datana); $i++){
			if($datana[$i]['id_rps']==$data3){
				$isi=0;
			}
			else{
				$isi=1;
			}
		}
		if($isi = 1){
			$data_insert = array(
				'id_rps' => $data3
			);
			$save=$this->misirps->Insert('norma_akademik', $data_insert);	
		}
		$datar=$this->mdaftarmatkul->GetR();
		for ($i=0; $i<count($datar); $i++){
			if($datar[$i]['id_rps']==$data3){
				$isi=0;
			}
			else{
				$isi=1;
			}
		}
		if($isi = 1){
			$data_insert = array(
				'id_rps' => $data3
			);
			$save=$this->misirps->Insert('referensi', $data_insert);	
		}
		$datarp=$this->mdaftarmatkul->GetRP();
		for ($i=0; $i<count($datarp); $i++){
			if($datarp[$i]['id_rps']==$data3){
				$isi=0;
			}
			else{
				$isi=1;
			}
		}
		if($isi=1){
			for($i=1;$i<=14;$i++){
				$data_insert = array(
					'id_rps' => $data3,
					'minggu_ke' => $i
				);
				$save=$this->misirps->Insert('rencana_pembelajaran', $data_insert);
			}
		}
		redirect('daftarmatkul','refresh');
    }
}

