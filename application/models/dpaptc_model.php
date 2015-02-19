<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dpaptc_Model extends CI_Model {

	function __construct() {
            parent::__construct();
	}
        
        function verDpaPtcSistemas() {
            //$query = $this->db->get('dpa_ptc');
            $this->db->where('carrera', 1);
            $query = $this->db->get('dpa_ptc');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
	}
        
        function verDpaPtcMecatronica() {
            $this->db->where('carrera', 2);
            $query = $this->db->get('dpa_ptc');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
	}
        
        function verDpaPtcIndustrial() {
            $this->db->where('carrera', 3);
            $query = $this->db->get('dpa_ptc');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
	}
        
        function verDpaPtcMecanica() {
            $this->db->where('carrera', 4);
            $query = $this->db->get('dpa_ptc');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
	}
        
        function verDpaPtcEnergias() {
            $this->db->where('carrera', 5);
            $query = $this->db->get('dpa_ptc');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
	}
        
        function verDpaPtcNegocios() {
            $this->db->where('carrera', 6);
            $query = $this->db->get('dpa_ptc');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
	}

        /* ------------------------------------ */
        
        
	function guardar_dpaptc($data) {
            $this->db->insert('dpa_ptc', $data);
            return $this->db->insert_id();
	}
        
        function eliminar_dpaptc($id) {
            $this->db->where('id_dpa_ptc', $id);
            $this->db->delete('dpa_ptc');
        }
        
        function obtener_dpaptc($id) {
            $this->db->where('id_dpa_ptc', $id);
            $query = $this->db->get('dpa_ptc');
            // ó $query = $this->db->get_where('encuesta', array('id'=>$id));
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
        }
        
        function editar_dpaptc($data) {
            $this->db->where('id_dpa_ptc', $data["id_dpa_ptc"]);
            $this->db->update('dpa_ptc', $data);
        }
        
        function ver_curso() {
            $curso = $this->db->get('carreras');
            if ($curso->num_rows() > 0) {
                return $curso->result_array();
            } else {
                return FALSE;
            }
        }
        
        function ver_puesto() {
            $puesto = $this->db->get('puesto_profesor');
            if ($puesto->num_rows() > 0) {
                return $puesto->result_array(); // ->row_array();
            } else {
                return FALSE;
            }
        }
}