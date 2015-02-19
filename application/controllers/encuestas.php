<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Encuestas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('encuesta_model');
    }

    public function index(){
        // Ver encuestas insertadas en la BD:
        $data = array(
            'encuestas' => $this->encuesta_model->get_all()
        );
        
        $this->load->view('headers/librerias');
        $this->load->view('encuestas/all', $data);
        $this->load->view('footer');
    }

    // Agregar nueva encuesta:
    public function set_form(){
        $this->load->view('headers/librerias');
        $this->load->view('encuestas/set_form');
        $this->load->view('footer');
    }
    public function set() {
        $data = $this->input->post();
        $this->encuesta_model->set($data);
        redirect('encuestas');
    }
    
    // Eliminar encuesta por id:
    public function delete($id) {
        $this->encuesta_model->delete($id);
        redirect('encuestas');
    }

    // Editar encuesta por id:
    public function update_form($id){
        $get_data = $this->encuesta_model->get_by_id($id);
        
        if ($get_data != NULL) {
            foreach ($get_data->result() as $row) {
                $nombre = $row->nombre;
                $estatus = $row->estatus;
            }
            
            $data = array (
                'idencuesta' => $id,
                'nombre' => $nombre,
                'estatus' => $estatus
            );

        } else {
            $data = '';
        }
        
        $this->load->view('headers/librerias');
        $this->load->view('encuestas/update_form', $data);
        $this->load->view('footer');
    }
    public function update() {
        $data = $this->input->post();
        $this->encuesta_model->update($data);
        redirect('encuestas');
    }
}