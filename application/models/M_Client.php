<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Client extends CI_Model {

    function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    public function getUserByID($ID)
    {
        $this->db->where('ID_Usuario', $ID);
        $resp = $this->db->get('clientes');
        if ($resp->num_rows() >= 1) {
            return $resp->result();
        } else {
            return false;
        }
    }
    public function get_employeesAtUser()
    {
        $query = $this->db->get('trabajadores');
        return $query -> result();
    }
    public function getUserByIDEmployee($ID)
    {
        $this->db->where('ID_Trabajador', $ID);
        $resp = $this->db->get('trabajadores');
        if ($resp->num_rows() >= 1) {
            return $resp->result();
        } else {
            return false;
        }
    }
    

}

/* End of file M_Client.php */
