<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_Employee extends CI_Model
{

    function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    public function getUserByID($ID)
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

/* End of file M_Employee.php */
