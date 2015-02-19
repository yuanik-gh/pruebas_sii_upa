<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Encuesta_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function set($data) {
        $this->db->insert('encuesta', $data);
    }
    
    public function update($data) {
        $this->db->where('idencuesta', $data['idencuesta']);
        $this->db->update('encuesta', $data);
    }
    
    public function delete($id) {
        $this->db->where('idencuesta', $id);
        $this->db->delete('encuesta');
    }
    
    public function get_by_id($id) {
        $query = $this->db->get_where('encuesta', array('idencuesta'=>$id));
        return ($query->num_rows > 0) ? $query : NULL;
    }
    
    public function get_all() {
        $query = $this->db->get('encuesta');
        return ($query->num_rows() > 0) ? $query : NULL;
    }
}