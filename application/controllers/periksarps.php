<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PeriksaRPS extends CI_Controller {
    	public function index()
	{
		$this->load->model("mperiksarps");
		$data1=$this->mperiksarps->RPS();
		$data["rps"] = $data1;
		$this->load->view('periksarps', $data);

	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}

