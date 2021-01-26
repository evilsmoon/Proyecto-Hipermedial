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

    $queryWhere = array('email' => $uEemail, 'password' => $uEpassword);
    $this->db->where($queryWhere);
    $result =  $this->db->get('trabajadores');

    if ($result->num_rows() == 1) {
      return $result->row();
    } else {
      return false;
    }
  }

  public function loginClient($uCemail, $uCpassword)
  {

    $queryWhere = array('email' => $uCemail, 'password' => $uCpassword);
    $this->db->where($queryWhere);
    $result =  $this->db->get('clientes');

    if ($result->num_rows() == 1) {
      return $result->row();
    } else {
      return false;
    }

  }
}
