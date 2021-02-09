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

    public function getEducationByiD($ID)
    {
        $this->db->where('ID_Trabajador', $ID);

        $resp = $this->db->get('formacion ');

        if ($resp->num_rows() >= 1) {
            return $resp->result();
        } else {
            return false;
        }
    }

    public function getSocialByID($ID)
    {
        $this->db->where('ID_Trabajador', $ID);

        $resp = $this->db->get('redes_sociales');

        if ($resp->num_rows() >= 1) {
            return $resp->result();
        } else {
            return false;
        }
    }
    public function addEducation($ID_Trabajador, $name_curso, $company, $year)
    {

        $data = [

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

    public function addSocial($ID_Trabajador, $name_red_social, $url_red_social)
    {


        $data = [
            "ID_Trabajador"   => $ID_Trabajador,
            "name_red_social" => $name_red_social,
            "url_red_social"  => $url_red_social
        ];

        $query = $this->db->insert('redes_sociales', $data);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }


    public function addJobs(

        $ID_Trabajador,
        $name_project,
        $name_servicio,
        $description_servicio,
        $year_servicio	
    )
    {

        $data = [
            'ID_Trabajador' => $ID_Trabajador,
            'name_project' => $name_project,
            'name_servicio' => $name_servicio,
            'description_servicio' => $description_servicio,
            'year_servicio' => $year_servicio
        ];

        $query = $this->db->insert('proyectos', $data);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}

/* End of file M_Employee.php */
