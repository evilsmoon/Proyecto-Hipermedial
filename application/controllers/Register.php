
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->model('M_Register');
    }

    public function index()
    {

        $this->load->view('template_register/Header');
        $this->load->view('Register');
        $this->load->view('template_register/Footer');
    }

    public function createAccountEmploye()
    {
        $id = $this->session->userdata('id');

        if (!$id) {
            redirect(base_url());
        } else {

            if ($this->input->post()) {
                $registerNameE = $this->db->escape($_POST['registerNameE']);
                $registerUsernameE = $this->db->escape($_POST['registerUsernameE']);
                $registerEmailE = $this->db->escape($_POST['registerEmailE']);
                $registerPasswordE = $this->db->escape($_POST['registerPasswordE']);
                $registerRepeatPasswordE = $this->db->escape($_POST['registerRepeatPasswordE']);
                $registerCountryE = $this->db->escape($_POST['registerCountryE']);
                $registerCityE = $this->db->escape($_POST['registerCityE']);
                $registerPhoneE = $this->db->escape($_POST['registerPhoneE']);
                $registerServiceE = $this->db->escape($_POST['registerServiceE']);
                $registerYear_ExpE = $this->db->escape($_POST['registerYear_ExpE']);
                $registerDescriptionE = $this->db->escape($_POST['registerDescriptionE']);

                $result = $this->M_Register->registerEmployee(
                    $registerNameE,
                    $registerUsernameE,
                    $registerEmailE,
                    $registerPasswordE,
                    $registerRepeatPasswordE,
                    $registerCountryE,
                    $registerCityE,
                    $registerPhoneE,
                    $registerServiceE,
                    $registerYear_ExpE,
                    $registerDescriptionE

                );
                if ($result) {
                    $data =[
                        'id ' =>$result->ID_Trabajador,
                        'name'=> $result->name,
                        'last_name'=> $result->last_name,
                        'status'=>$result->status,
                        'Login' =>TRUE,
                        
                    ];
                    $this->session->set_userdata($data);

                    header("Location:".base_url()."Administrador/CrearEmpresa");
                }
            }
        }
    }
}
