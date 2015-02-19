<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pruebas_Siiupa extends CI_Controller {

	public function index()
	{
		$this->load->view('pruebas_siiupa');
	}
        
        public function vistas() {
            $this->load->view('headers/librerias');
            $this->load->view('');
            $this->load->view('footer');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */