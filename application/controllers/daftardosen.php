<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DaftarDosen extends CI_Controller {
    	public function index()
	{
		$this->load->view('daftardosen');
	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}

