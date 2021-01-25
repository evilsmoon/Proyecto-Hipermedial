
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

    public function createAccountEmployee()
    {
        if ($this->input->is_ajax_request()) {

            $registerNameE = $this->input->post('registerNameE');
            $registerUsernameE = $this->input->post('registerUsernameE');
            $registerEmailE = $this->input->post('registerEmailE');
            $registerPasswordE = $this->input->post('registerPasswordE');
            // $registerRepeatPasswordE = $this->input->post('registerRepeatPasswordE');
            $registerCountryE = $this->input->post('registerCountryE');
            $registerCityE = $this->input->post('registerCityE');
            $registerPhoneE = $this->input->post('registerPhoneE');
            $registerServiceE = $this->input->post('registerServiceE');
            $registerYear_ExpE = $this->input->post('registerYear_ExpE');
            $registerDescriptionE = $this->input->post('registerDescriptionE');

            $result = $this->M_Register->registerEmployee(
                $registerNameE,
                $registerUsernameE,
                $registerEmailE,
                $registerPasswordE,
                $registerCountryE,
                $registerCityE,
                $registerPhoneE,
                $registerServiceE,
                $registerYear_ExpE,
                $registerDescriptionE

            );

            if ($result) {

                $data = [
                    'id' => $result->ID_Trabajador,
                    'name' => $result->name,
                    'last_name' => $result->last_name,
                    'status' => $result->status,
                    'Role' => $result->role,
                    'Login' => TRUE

                ];
                $this->session->set_userdata($data);

                echo ('1');
            } else {
                echo ('0');
            }

        } else {
            redirect(base_url());
        }
    }
}
