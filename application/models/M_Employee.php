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

    public function addEducation($ID_Trabajador,$name_curso,$company,$year)
    {

        $data =[

            "ID_Trabajador" => $ID_Trabajador,
            "name_curso "   => $name_curso,
            "company"       => $company,
            "yaer"          => $year,
            
        ];
        $query = $this->db->insert('formacion', $data);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}

/* End of file M_Employee.php */




	