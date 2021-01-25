<?php

defined('BASEPATH') or exit('No direct script access allowed');
class M_Login extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function loginAdmin($uAemail, $uApassword)
  {
    $queryAdmin = "SELECT administrador.ID_Administrador , administrador.email,administrador.password , administrador.role FROM administrador WHERE administrador.email='" . $uAemail . "' AND administrador.password = '" . $uApassword . "' ";

    $result = $this->db->query($queryAdmin);

    if ($result->num_rows() == 1) {
      return $result->row();
    } else {
      return false;
    }
  }

  public function loginEmployee($uEemail, $uEpassword)
  {

    $result =  $this->db->get_where('trabajadores', array('email' => $uEemail, 'password' => $uEpassword));


    if ($result->num_rows() == 1) {
      return $result->row();
    } else {
      return false;
    }
  }
}
