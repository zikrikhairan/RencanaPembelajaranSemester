<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DaftarRPS extends CI_Controller {
    	public function index()
	{
		$this->load->view('daftarrps');
	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
