
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
            $resp['getUserByID'] = $this->M_Employee->getUserByID($this->session->userdata('id'));
            $this->load->view('template_employee/Header');
            $this->load->view('template_employee/Navbar');
            $this->load->view('Employee', $resp);
            $this->load->view('template_employee/Footer');
        } else {

            redirect(base_url());
        }
    }

    public function profile()
    {
        $id = $this->session->userdata('id');
        $role = $this->session->userdata('Role');
        if (!$id) {

            redirect(base_url());
        } elseif ($role == 'ROLE_Employee') {
            $data['getUserByID'] = $this->M_Employee->getUserByID($this->session->userdata('id'));
            $this->load->view('template_employee/Header');
            $this->load->view('template_employee/Navbar');
            $this->load->view('pages_employee/Profile',$data);
            $this->load->view('template_employee/Footer');
        } else {

            redirect(base_url());
        }
    }
}

/* End of file Employee.php */
