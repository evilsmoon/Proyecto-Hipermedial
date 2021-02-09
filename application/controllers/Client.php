<?php




defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata("Login") && $this->session->userdata('Role') == 'ROLE_Client') {
            redirect(base_url());
        }
        $this->load->model('M_Client');
        
    }

    public function index()
    {
        $id = $this->session->userdata('id');
        $role = $this->session->userdata('Role');
        if (!$id) {

            redirect(base_url());
        } elseif ($role == 'ROLE_Client') {
            $resp['get_employeesAtUser'] = $this->M_Client->get_employeesAtUser();
            $this->load->view('template_client/Header');
            $this->load->view('template_client/Navbar');
            $this->load->view('Client.php', $resp);
            $this->load->view('template_client/Footer');
        } else {

            redirect(base_url());
        }
    }

    public function message()
    {
        $id = $this->session->userdata('id');
        $role = $this->session->userdata('Role');
        if (!$id) {

            redirect(base_url());
        } elseif ($role == 'ROLE_Client') {
            // $resp['getUserByID'] = $this->M_Client->getUserByID($this->session->userdata('id'));
            $this->load->view('template_client/Header');
            $this->load->view('template_client/Navbar');
            $this->load->view('pages_client/message');
            $this->load->view('template_client/Footer');
        } else {

            redirect(base_url());
        }
    }

    public function getUserByIDEmploye($IDE)
    {
        $id = $this->session->userdata('id');
        $role = $this->session->userdata('Role');
        if (!$id) {

            redirect(base_url());
        } elseif ($role == 'ROLE_Client') {
            $resp['getUserByID'] = $this->M_Client->getUserByIDEmployee($IDE);
            $this->load->view('template_client/Header');
            $this->load->view('template_client/Navbar');
            $this->load->view('pages_client/profileEmployee',$resp);
            $this->load->view('template_client/Footer');
        } else {

            redirect(base_url());
        }
    }


}

/* End of file Client.php */
