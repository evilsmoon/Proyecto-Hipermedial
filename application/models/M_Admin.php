<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    function __construct()
	{
		parent::__construct();
		$this->load->database();
    }
    
    public function get_users()
	{
		$query = $this->db->get('clientes');
		return $query;
    }
    public function get_employees()
    {
        $query = $this->db->get('trabajadores');
        return $query;
    }


}

/* End of file M_Admin.php */
