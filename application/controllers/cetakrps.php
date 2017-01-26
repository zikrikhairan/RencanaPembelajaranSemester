<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CetakRPS extends CI_Controller {
    public function index($idrps)
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
		$this->load->view('cetakrps', $data);
	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}