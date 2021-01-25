
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
    }

    public function index(){

        $this->load->view('template/Header');
        $this->load->view('template/Navbar');
        $this->load->view('Home');
        $this->load->view('template/Footer');
    }
}
