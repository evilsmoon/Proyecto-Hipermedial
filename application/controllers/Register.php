
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    function __construct()
    {

        parent::__construct();

        $this->load->model('M_Register');
    }

    public function index($page = 'Register')
    {

        if (!file_exists(APPPATH . 'views/' . $page . '.php')) {
            show_404();
        } else {

            $this->load->view('template_register/Header');
            $this->load->view('Register');
            $this->load->view('template_register/Footer');
        }
    }

    public function createAccountEmployee()
    {
        if ($this->input->is_ajax_request()) {

            $registerEmployeeNameE = $this->input->post('registerNameE');
            $registerEmployeeUsernameE = $this->input->post('registerUsernameE');
            $registerEmployeeEmailE = $this->input->post('registerEmailE');
            $registerEmployeePasswordE = $this->input->post('registerPasswordE');
            // $registerEmployeeRepeatPasswordE = $this->input->post('registerRepeatPasswordE');
            $registerEmployeeCountryE = $this->input->post('registerCountryE');
            $registerEmployeeCityE = $this->input->post('registerCityE');
            $registerEmployeePhoneE = $this->input->post('registerPhoneE');
            $registerEmployeeServiceE = $this->input->post('registerServiceE');
            $registerEmployeeYear_ExpE = $this->input->post('registerYear_ExpE');
            $registerEmployeeDescriptionE = $this->input->post('registerDescriptionE');

            $result = $this->M_Register->registerEmployee(
                $registerEmployeeNameE,
                $registerEmployeeUsernameE,
                $registerEmployeeEmailE,
                $registerEmployeePasswordE,
                $registerEmployeeCountryE,
                $registerEmployeeCityE,
                $registerEmployeePhoneE,
                $registerEmployeeServiceE,
                $registerEmployeeYear_ExpE,
                $registerEmployeeDescriptionE

            );

            if ($result) {
                echo ('1');
            } else {
                echo ('0');
            }
        } else {
            redirect(base_url());
        }
    }

    public function createAccountClient()
    {
        if ($this->input->is_ajax_request()) {
            $registerClientName      = $this->input->post('registerName');
            $registerClientLast_name = $this->input->post('registerLast_name');
            $registerClientEmail     = $this->input->post('registerEmail');
            $registerClientPassword  = $this->input->post('registerPassword');
            $registerClientPhone     = $this->input->post('registerPhone');
            $registerClientCountry   = $this->input->post('registerCountry');
            $registerClientCity      = $this->input->post('registerCity');

            $resultClient = $this->M_Register->registerClient(
                $registerClientName,
                $registerClientLast_name,
                $registerClientEmail,
                $registerClientPassword,
                $registerClientPhone,
                $registerClientCountry,
                $registerClientCity

            );

            if ($resultClient) {
                echo ('1');
            } else {
                echo ('0');
            }
        } else {
            redirect(base_url());
        }
    }
}
