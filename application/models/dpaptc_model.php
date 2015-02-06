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
            //$query = $this->db->get('dpa_ptc');
            $this->db->where('carrera', 2);
            $query = $this->db->get('dpa_ptc');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
	}
        
        function verDpaPtcIndustrial() {
            //$query = $this->db->get('dpa_ptc');
            $this->db->where('carrera', 3);
            $query = $this->db->get('dpa_ptc');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
	}
        
        function verDpaPtcMecanica() {
            //$query = $this->db->get('dpa_ptc');
            $this->db->where('carrera', 4);
            $query = $this->db->get('dpa_ptc');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
	}
        
        function verDpaPtcEnergias() {
            //$query = $this->db->get('dpa_ptc');
            $this->db->where('carrera', 5);
            $query = $this->db->get('dpa_ptc');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
	}
        
        function verDpaPtcNegocios() {
            //$query = $this->db->get('dpa_ptc');
            $this->db->where('carrera', 6);
            $query = $this->db->get('dpa_ptc');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
	}

	function guardar_dpaptc($data) {
            $this->db->insert('dpa_ptc', $data);
            return $this->db->insert_id();
	}
        
        function eliminar_dpaptc($id) {
            $this->db->where('id_pta_ptc', $id);
            $this->db->delete('dpa_ptc');
        }
}