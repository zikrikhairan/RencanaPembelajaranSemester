<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DaftarMatKul extends CI_Controller {
    public function index()
	{
		$this->load->model("mdaftar_matkul");
		$data1=$this->mdaftar_matkul->DaftarRPS();
		$data["rps"] = $data1;
		$this->load->view('daftarmatkul', $data);
	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}

