<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class profesor_model extends CI_Model {
    
    function get($id) {
        $this->db->select("*");
        $this->db->from("profesor");
        $this->db->join("persona", "persona.idpersonas=profesor.idpersonas", "inner");
        $this->db->where("profesor.idprofesor", $id);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }
    function get_by_idcurso($id) {
        $this->db->select("*");
        $this->db->from("persona");
        $this->db->join("profesor", "profesor.idpersonas=persona.idpersonas", "inner");
        $this->db->join("profesor_has_curso", "profesor_has_curso.profesor_idprofesor=profesor.idprofesor", "inner");
        $this->db->join("curso", "curso.idcurso=profesor_has_curso.curso_idcurso", "inner");
        $this->db->where("curso.idcurso", $id);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }
    function set($data){
        $data = ['Nombre' => $nombre,'Ap_Paterno' => $ap_paterno,
                 'Ap_Materno' => $ap_materno,'Puesto'=> $puesto];
        $this->db->insert('profesor', $data);
    }
    function update($id,$puesto){
        $data = ['Puesto' => $puesto ];
        $this->db->where('id', $id);
        $this->db->update('profesor', $data);
    }
    function delete ($id){
        $this->db->delete('profesor', array('id' => $id));
    }

    /*
    function get_by_id($id) {
        $query = $this->db->get_where('personas', array('id' => $id));
        return $query->row_array();
    }

    function get_all() {
        $query = $this->db->get('personas');
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function set($nombre,$apellido) {
        $data = ['Nombre' => $nombre,'Apellido' => $apellido];
        $this->db->insert('personas', $data);
    }

    function update($id,$nombre,$apellido) {
        $data = ['Nombre' => $nombre,'Apellido' => $apellido];
        $this->db->where('id', $id);
        $this->db->update('personas', $data);
    }

    function delete($id) {
        $this->db->delete('personas', array('id' => $id));
    }*/
}
