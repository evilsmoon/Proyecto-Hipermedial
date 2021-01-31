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

    

}

/* End of file M_Client.php */
