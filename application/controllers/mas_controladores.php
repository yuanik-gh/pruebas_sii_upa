<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Encuestas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('encuesta_model');
    }

/******************** otras funciones ********************/
    public function catalogo(){
        $this->load->view('headers/librerias');
        $this->load->view('encuestas/catalogo');
        $this->load->view('footer');
    }
    
    public function video(){
        $this->load->view('headers/librerias');
        $this->load->view('encuestas/video');
        $this->load->view('footer');
    }
    
    public function cuestionario(){
        $this->load->view('headers/librerias');
        $this->load->view('encuestas/cuestionario');
        $this->load->view('footer');
    }
    
    public function presentacion(){
        $this->load->view('headers/librerias');
        $this->load->view('encuestas/presentacion');
        $this->load->view('footer');
    }
}