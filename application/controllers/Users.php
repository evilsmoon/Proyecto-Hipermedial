
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {

        parent::__construct();

        // if (!$this->session->userdata("login")) {

        //     redirect(base_url());
        // }

        // $this->load->model('M_Users');
    }
}
