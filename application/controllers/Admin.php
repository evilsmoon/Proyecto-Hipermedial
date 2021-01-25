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
        $this->load->model('M_Users');
    }

    // public function index()
    // {
    //     $id = $this->session->userdata('id');

    //     if (!$id) {
    //         redirect(base_url());
    //     } else {
    //         $this->load->model('M_Users');
    //         $data['get_users'] = $this->M_Users->get_users();
    //         $this->load->view('template_admin/Header');
    //         $this->load->view('template_admin/Navbar');
    //         $this->load->view('template_admin/Menu');
    //         $this->load->view('Admin', $data);
    //         $this->load->view('template_admin/Footer');
    //     }
    // }
}
