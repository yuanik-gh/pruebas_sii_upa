<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dpa_Ptc extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('dpaptcModel');
    }

    public function index() {
        $this->load->view('headers/librerias');
        $this->load->view('dpa_ptc/dpa_ptc');
        $this->load->view('footer');
    }

    public function agregar_dpa_ptc() {
        $this->load->view('headers/librerias');
        $this->load->view('dpa_ptc/agregar_dpa_ptc');
        $this->load->view('footer');
    }

    public function guardar_dpa_ptc() {
        $data = array(
            'profesor' => $this->input->post('profesor', TRUE),
            'carrera' => $this->input->post('carrera', TRUE),
            'puesto' => $this->input->post('puesto', TRUE),
            'fecha_inicio' => $this->input->post('fecha_inicio', TRUE),
            'fecha_salida' => $this->input->post('fecha_salida', TRUE)
        );

        $this->dpaptcModel->guardar($data);
        redirect('dpa_ptc');
    }
}

/* End of file dpa_ptc.php */
/* Location: ./application/controllers/dpa_ptc.php */