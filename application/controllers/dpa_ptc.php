<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dpa_Ptc extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('dpaptc_Model');
    }

    public function index() {
        $data = array('prof_sistemas' => $this->dpaptc_Model->verDpaPtcSistemas(),
            'prof_mecatronica' => $this->dpaptc_Model->verDpaPtcMecatronica(),
            'prof_industrial' => $this->dpaptc_Model->verDpaPtcIndustrial(),
            'prof_mecanica' => $this->dpaptc_Model->verDpaPtcMecanica(),
            'prof_energias' => $this->dpaptc_Model->verDpaPtcEnergias(),
            'prof_negocios' => $this->dpaptc_Model->verDpaPtcNegocios()
        );
        
        $this->load->view('headers/librerias');
        $this->load->view('dpa_ptc/dpa_ptc',$data);
        $this->load->view('footer');
    }

    public function agregar_dpa_ptc() {
        $this->load->view('headers/librerias');
        $this->load->view('dpa_ptc/agregar_dpa_ptc');
        $this->load->view('footer');
    }

    public function guardar_dpa_ptc() {
        $data = $this->input->post();
        $this->dpaptc_Model->guardar_dpaptc($data);
        redirect('dpa_ptc');
    }
    
    public function eliminar_dpa_ptc($id) {
        $del = $this->dpaptc_Model->eliminar_dpaptc($id);
        redirect('dpa_ptc');
    }
    
    public function editar_dpa_ptc($id) {
        $this->load->view('headers/librerias');
        $this->load->view('dpa_ptc/editar_dpa_ptc');
        $this->load->view('footer');
    }
    
    public function guardar_cambios_dpa_ptc() {
        echo 'Guardar cambios';
    }
}

/* End of file dpa_ptc.php */
/* Location: ./application/controllers/dpa_ptc.php */