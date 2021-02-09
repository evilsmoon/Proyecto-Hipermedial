
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata("Login") && $this->session->userdata('Role') == 'ROLE_Employee') {
            redirect(base_url());
        }
        $this->load->model('M_Employee');
    }
    public function index()
    {

        $id = $this->session->userdata('id');
        $role = $this->session->userdata('Role');
        if (!$id) {

            redirect(base_url());
        } elseif ($role == 'ROLE_Employee') {
            $data['getUserByID'] = $this->M_Employee->getUserByID($this->session->userdata('id'));
            $data['getEducationByiD'] = $this->M_Employee->getEducationByiD($this->session->userdata('id'));
            $data['getSocialByID'] = $this->M_Employee->getSocialByID($this->session->userdata('id'));
            $this->load->view('template_employee/Header');
            $this->load->view('template_employee/Navbar');
            $this->load->view('Employee', $data);
            $this->load->view('template_employee/Footer');
        } else {

            redirect(base_url());
        }
    }


    public function setEducationByID()
    {

        if ($this->input->is_ajax_request()) {

            $input_ID_Trabajador = $this->session->userdata('id');
            $input_name_curso    = $this->input->post('inputNameCourse');
            $input_company       = $this->input->post('inputCompany');
            $input_year          = $this->input->post('inputYear');

            $result = $this->M_Employee->addEducation(
                $input_ID_Trabajador,
                $input_name_curso,
                $input_company,
                $input_year
            );

            if ($result) {
                echo ('1');
            } else {
                echo ('0');
            }
        } else {
            $this->index();
        }
    }

    
    public function setSocialByID()
    {
        if ($this->input->is_ajax_request()) {
            $input_ID_trabajador  = $this->session->userdata('id');
            $input_name_social    = $this->input->post('inputNameSocial');
            $input_Url            = $this->input->post('inputUrl');

            $result = $this->M_Employee->addSocial(
                $input_ID_trabajador,
                $input_name_social,
                $input_Url
            );

            if ($result) {
                echo ('2');
            } else {
                echo ('0');
            }
        } else {
            $this->index();
        }
    }

    public function setJobsByID()
    {

        if ($this->input->is_ajax_request()) {

            $input_ID_Trabajador = $this->session->userdata('id');
            $input_name_proyect    = $this->input->post('inputNameCourse');
            $input_name_serv       = $this->input->post('inputCompany');
            $input_des       = $this->input->post('inputCompany');
            $input_year          = $this->input->post('inputYear');

            $result = $this->M_Employee->addJobs(
                $input_ID_Trabajador,
                $input_name_proyect,
                $input_name_serv,
                $input_des,
                $input_year
            );

            if ($result) {
                echo ('1');
            } else {
                echo ('0');
            }
        } else {
            $this->index();
        }
    }

}

/* End of file Employee.php */
