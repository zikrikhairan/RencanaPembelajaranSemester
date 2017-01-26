<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IsiRPS extends CI_Controller {
	function __construct()
    {
        parent::__construct();
    }
    public function index()
	{
		$this->load->model('misirps');
		$datas = $this->misirps->GetRPS();
		$data["datarps"] = $datas;
		$this->load->view('isirps', $data);
	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}

