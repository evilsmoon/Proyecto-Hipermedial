<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Hace conexion con la bdd  para el registro/ creacion de nuevos usuarios
 * 
 */

class M_Users extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	
	public function get_users()
	{
		$query = $this->db->get('usuarios');
		return $query;
	}
}


