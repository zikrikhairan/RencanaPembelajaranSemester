<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PeriksaRPS_prps extends CI_Controller {
    public function index()
	{
		$this->load->view('periksarps_prps', $data);

	}
	function periksa($idrps)
	{
		$this->load->model("mperiksarps");
		$data1=$this->mperiksarps->GetRPS(" && rps.id_rps=$idrps");
		$data["rps"] = $data1;
		$data2=$this->mperiksarps->GetCP(" where id_rps=$idrps");
		$data["cp"] = $data2;
		$data3=$this->mperiksarps->GetNA(" where id_rps=$idrps");
		$data["na"] = $data3;
		$data4=$this->mperiksarps->GetP(" where id_rps=$idrps");
		$data["p"] = $data4;
		$data5=$this->mperiksarps->GetRP(" where id_rps=$idrps");
		$data["rp"] = $data5;
		$data6=$this->mperiksarps->GetR(" where id_rps=$idrps");
		$data["r"] = $data6;
		$data7="";
		$data8="";
		$data9="";
		$data10="";
		$data11="";
		$data12="";
		$data["rps2"] = $data7;
		$data["cp2"] = $data8;
		$data["na2"] = $data9;
		$data["p2"] = $data10;
		$data["rp2"] = $data11;
		$data["r2"] = $data12;
		$this->load->view('periksarps_prps', $data);
	}
	function periksabanding($idrps)
	{
		$this->load->model("mperiksarps");
		$data1=$this->mperiksarps->GetRPS(" && rps.id_rps=$idrps");
		$data["rps"] = $data1;
		$kode=$data1[0]['kode_matkul'];
		$data2=$this->mperiksarps->GetCP(" where id_rps=$idrps");
		$data["cp"] = $data2;
		$data3=$this->mperiksarps->GetNA(" where id_rps=$idrps");
		$data["na"] = $data3;
		$data4=$this->mperiksarps->GetP(" where id_rps=$idrps");
		$data["p"] = $data4;
		$data5=$this->mperiksarps->GetRP(" where id_rps=$idrps");
		$data["rp"] = $data5;
		$data6=$this->mperiksarps->GetR(" where id_rps=$idrps");
		$data["r"] = $data6;
		$idrpsold="";
		$data8="";
		$data9="";
		$data10="";
		$data11="";
		$data12="";
		$data7=$this->mperiksarps->GetRPS2(" && rps.kode_matkul='$kode'");
		if(!empty($data7)){
			$idrpsold=$data7[0]['id_rps'];
			$data8=$this->mperiksarps->GetCP2(" where id_rps=$idrpsold");
			$data9=$this->mperiksarps->GetNA2(" where id_rps=$idrpsold");
			$data10=$this->mperiksarps->GetP2(" where id_rps=$idrpsold");
			$data11=$this->mperiksarps->GetRP2(" where id_rps=$idrpsold");
			$data12=$this->mperiksarps->GetR2(" where id_rps=$idrpsold");
		}
		$data["rps2"] = $data7;
		$data["cp2"] = $data8;
		$data["na2"] = $data9;
		$data["p2"] = $data10;
		$data["rp2"] = $data11;
		$data["r2"] = $data12;
		$this->load->view('periksarps_prps', $data);

	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}

