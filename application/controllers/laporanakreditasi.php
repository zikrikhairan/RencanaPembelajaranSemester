<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class laporanAkreditasi extends CI_Controller {
    public function index()
	{
		$this->load->model("mlaporanakreditasi");
		$data1=$this->mlaporanakreditasi->RPS();
		$data["rps"] = $data1;
		for($i=0;$i<count($data1);$i++){
			$idrps=$data1[$i]['id_rps'];
			$data2=$this->mlaporanakreditasi->GetCP(" where id_rps=$idrps");
			$data["cp"] = $data2;
			$data3=$this->mlaporanakreditasi->GetNA(" where id_rps=$idrps");
			$data["na"] = $data3;
			$data4=$this->mlaporanakreditasi->GetP(" where id_rps=$idrps");
			$data["p"] = $data4;
			$data5=$this->mlaporanakreditasi->GetRP(" where id_rps=$idrps");
			$data["rp"] = $data5;
			$data6=$this->mlaporanakreditasi->GetR(" where id_rps=$idrps");
			$data["r"] = $data6;
		}
		for($i=0;$i<count($data1);$i++){
			if($data1[$i]['semester']==1){
				$data["semester1"][]=$data1[$i];
			}
			else if($data1[$i]['semester']==2){
				$data["semester2"][]=$data1[$i];
			}
			else if($data1[$i]['semester']==3){
				$data["semester3"][]=$data1[$i];
			}
			else if($data1[$i]['semester']==4){
				$data["semester4"][]=$data1[$i];
			}
			else if($data1[$i]['semester']==5){
				$data["semester5"][]=$data1[$i];
			}
			else if($data1[$i]['semester']==6){
				$data["semester6"][]=$data1[$i];
			}
			else if($data1[$i]['semester']==7){
				$data["semester7"][]=$data1[$i];
			}
			else if($data1[$i]['semester']==8){
				$data["semester8"][]=$data1[$i];
			}
		}
		$this->load->view('laporanakreditasi', $data);

	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}

