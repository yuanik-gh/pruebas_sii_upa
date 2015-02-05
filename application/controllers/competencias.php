<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Competencias extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('competenciasModel');
    }

    public function index(){
        $data = array(
            'competencias' => $this->competenciasModel->verCompetencias(),
            'dump' => 0
        );

        $this->load->view('headers/librerias');
        $this->load->view('competencias/competencias', $data);
        $this->load->view('footer');
    }

    public function agregar_competencia() {
        $this->load->view('headers/librerias');
        $this->load->view('competencias/agregar_competencia');
        $this->load->view('footer');
    }

    public function guardar_competencia() {
        $data = array(
            'competencia' => $this->input->post('competencia', TRUE),
            'cuatrimestre' => $this->input->post('cuatrimestre', TRUE),
            'especialidad' => $this->input->post('especialidad', TRUE)
        );
        $this->competenciasModel->guardar($data);
        redirect('competencias');
    }

    function eliminar_competencia() {
        $id = $this->uri->segment(3);
        $this->competenciasModel->eliminar_competencia($id);
        redirect('competencias');
    }

    function editar_competencia($id) {

        $obtenerCompetencia = $this->competenciasModel->obtenerCompetencia($id);

        if ($obtenerCompetencia != FALSE) {
            foreach ($obtenerCompetencia->result() as $row) {
                $competencia = $row->competencia;
                $cuatrimestre = $row->cuatrimestre;
                $especialidad = $row->especialidad;
            }

            $data  = array(
                'id_competencia' => $id,
                'competencia' => $competencia,
                'cuatrimestre' => $cuatrimestre,
                'especialidad' => $especialidad
            );
        } else {
            $data = '';
            return FALSE;
        }

        $this->load->view('headers/librerias');
        $this->load->view('competencias/editar_competencia', $data);
        $this->load->view('footer');

    }

    function guardar_cambios_competencia() {       
        $data = $this->input->post();
        //var_dump($data);
        $this->competenciasModel->editarCompetencia($data);
        redirect('competencias');
    }

}

/* End of file competencias.php */
/* Location: ./application/controllers/competencias.php */