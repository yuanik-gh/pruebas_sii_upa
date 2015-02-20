<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Preguntas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('pregunta_model');
    }

    public function index(){
        // Ver preguntas insertadas en la BD:
        $data = array(
            'preguntas' => $this->pregunta_model->get_all()
        );
        
        $this->load->view('headers/librerias');
        $this->load->view('preguntas/all', $data);
        $this->load->view('footer');
    }

    // Agregar nueva pregunta:
    public function set_form(){
        $data = array (
            'categorias' => $this->pregunta_model->get_all_categorias(),
            'encuestas' => $this->pregunta_model->get_all_encuestas()
        );
        $this->load->view('headers/librerias');
        $this->load->view('preguntas/set_form', $data);
        $this->load->view('footer');
    }
    public function set() {
        $data = $this->input->post();
        $this->pregunta_model->set($data);
        redirect('encuestas');
    }
    /*
    // Eliminar pregunta por id:
    public function delete($id) {
        $this->encuesta_model->delete($id);
        redirect('encuestas');
    }

    // Editar pregunta por id:
    public function update_form($id){
        $get_data = $this->encuesta_model->get_by_id($id);
        
        if ($get_data != NULL) {
            foreach ($get_data->result() as $row) {
                $nombre = $row->nombre;
                $estatus = $row->estatus;
                $descripcion = $row->descripcion;
            }
            
            $data = array (
                'idencuesta' => $id,
                'nombre' => $nombre,
                'estatus' => $estatus,
                'descripcion' => $descripcion
            );

        } else {
            $data = '';
        }
        
        $this->load->view('headers/librerias');
        $this->load->view('preguntas/update_form', $data);
        $this->load->view('footer');
    }
    public function update() {
        $data = $this->input->post();
        $this->encuesta_model->update($data);
        redirect('encuestas');
    }
     */
}