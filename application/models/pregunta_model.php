<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pregunta_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function set($data) {
        $this->db->insert('pregunta_encuesta', $data);
    }
    
    public function update($data) {
        $this->db->where('id_pregunta_en', $data["id_pregunta_en"]);
        $this->db->update('pregunta_encuesta', $data);
    }
    
    public function delete($id) {
        $this->db->where('id_pregunta_en', $id);
        $this->db->delete('pregunta_encuesta');
    }
    
    public function get_by_id($id) {
        $query = $this->db->get_where('pregunta_encuesta', array('id_pregunta_en'=>$id));
        return ($query->num_row > 0) ? ($query->row_array()) : null;
    }
    
    public function get_all() {
        $query = $this->db->get('pregunta_encuesta');
        return ($query->num_rows() > 0) ? $query->result_array() : NULL;
    }
    
    public function get_all_categorias() {
        $categoria = $this->db->get('categoria_encuesta');
        return ($categoria->num_rows() > 0) ? $categoria->result_array() : NULL;
    }
    
    public function get_all_encuestas() {
        $encuesta = $this->db->get('encuesta');
        return ($encuesta->num_rows() > 0) ? $encuesta->result_array() : NULL;
    }
}