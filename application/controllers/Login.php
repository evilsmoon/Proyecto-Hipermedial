
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
        $this->load->model('M_Users');
        $this->load->model('M_Employee');
    }

    public function index($page = 'Login')
    {

        if (!file_exists(APPPATH . 'views/' . $page . '.php')) {
            show_404();
        } else {

            $this->load->view('template_login/Header');
            $this->load->view('Login');
            $this->load->view('template_login/Footer');
        }
    }


    public function screenAdmin()
    {
        $id = $this->session->userdata('id');
        $role = $this->session->userdata('Role');
        if (!$id) {

            redirect(base_url());
        } elseif ($role == 'ROLE_ADMIN') {

            $data['get_users'] = $this->M_Users->get_users();
            $this->load->view('template_admin/Header');
            $this->load->view('template_admin/Navbar');
            $this->load->view('template_admin/Menu');
            $this->load->view('Admin', $data);
            $this->load->view('template_admin/Footer');
        } else {

            redirect(base_url());
        }
    }

    public function ingresar()
    {
        if ($this->input->is_ajax_request()) {

            $correo = $this->input->post('txt_email');
            $clave  = $this->input->post('txt_password');

            $res = $this->M_Login->loginAdmin($correo, $clave);

            if ($res) {

                $data = [
                    "id" => $res->ID_Administrador,
                    "Login" => TRUE,
                    "Role" => $res->role
                ];
                $this->session->set_userdata($data);

                echo ('1');
            } else {
                $res2 = $this->M_Login->loginEmployee($correo, $clave);
                if ($res2) {
                    $data2 = [
                        "id" => $res2->ID_Trabajador,
                        "Login" => TRUE,
                        "Role" => $res2->role
                    ];
                    $this->session->set_userdata($data2);
                    echo ('2');
                } else {

                    $res3 = $this->M_Login->loginClient($correo, $clave);

                    if ($res3) {
                        $data3 = [
                            "id" => $res3->ID_Usuario,
                            "Login" => TRUE,
                            "Role" => $res3->role
                        ];
                        $this->session->set_userdata($data3);
                        echo ('3');
                    }
                }
            }
        } else {

            redirect(base_url());
        }
    }

    public function cerrar_sesion()
    {
        $this->session->unset_userdata('id');
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
