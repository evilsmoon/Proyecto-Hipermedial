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
        $this->load->model('M_Employee');
        
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
            $data['getUserByID']      = $this->M_Employee->getUserByID($IDE);
            $data['getEducationByiD'] = $this->M_Employee->getEducationByiD($IDE);
            $data['getSocialByID']    = $this->M_Employee->getSocialByID($IDE);
            $this->load->view('template_client/Header');
            $this->load->view('template_client/Navbar');
            $this->load->view('pages_client/profileEmployee',$data);
            $this->load->view('template_client/Footer');
        } else {

            redirect(base_url());
        }
    }

    public function messageEmployee($IDE)
    {
                if ($this->input->is_ajax_request()) {

            $input_ID_Client  = $this->session->userdata('id');
            $input_asunto     = $this->input->post('inputAsunto');
            $input_mensaje    = $this->input->post('inputContext');

            $result = $this->M_Client->sendMessageByID(
                $IDE,
                $input_ID_Client,
                $input_asunto,
                $input_mensaje
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




/* End of file Client.php */

