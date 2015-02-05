<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dpaptcModel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function guardar($data) {
		$this->db->insert('dpa_ptc', $data);
	}

?>