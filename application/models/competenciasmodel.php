<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class competenciasModel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function guardar($data) {
		$this->db->insert('competencias', $data);
	}

	function verCompetencias() {
		$query = $this->db->get('competencias');
		if ($query->num_rows() > 0) {
			return $query;
		} else {
			return FALSE;
		}
	}

	function eliminar_competencia($id) {
		$this->db->where('id_competencia', $id);
		$this->db->delete('competencias');
	}

	function obtenerCompetencia($id) {
		$this->db->where('id_competencia', $id);
		$query = $this->db->get('competencias');
		if ($query->num_rows() > 0) {
			return $query;
		} else {
			return FALSE;
		}
	}

	function editarCompetencia($data) {
		$this->db->where('id_competencia', $data["id_competencia"]);
		$this->db->update('competencias', $data);
	}
}