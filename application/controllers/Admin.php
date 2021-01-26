<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{


    function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata("Login") && $this->session->userdata('Role') === 'ROLE_ADMIN') {

            redirect(base_url());
        }
        $this->load->model('M_Admin');
    }
     public function index()
     {
         $id = $this->session->userdata('id');

        if (!$id) {
            redirect(base_url());
        } else {

            $this->load->view('template_admin/Header');
            $this->load->view('template_admin/Navbar');
            $this->load->view('template_admin/Menu');
            $this->load->view('Admin');
            $this->load->view('template_admin/Footer');
        }
    }

    public function getUsers()
    {
        $data['get_users'] = $this->M_Admin->get_users();
        $this->load->view('template_admin/Header');
        $this->load->view('template_admin/Navbar');
        $this->load->view('template_admin/Menu');
        $this->load->view('pages_admin/Users',$data);
        $this->load->view('template_admin/Footer');
    }
    public function getEmployees()
    {
        $data['get_employees'] = $this->M_Admin->get_employees();
        $this->load->view('template_admin/Header');
        $this->load->view('template_admin/Navbar');
        $this->load->view('template_admin/Menu');
        $this->load->view('pages_admin/Employees',$data);
        $this->load->view('template_admin/Footer');
    }
}
