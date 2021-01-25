<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Hace conexion con la bdd  para el registro/ creacion de nuevos usuarios
 * 
 */

class M_Register extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	// public function loginUser()
	// {
	// 	$query = $this->db->get('usuarios');
	// 	return $query;
    // }\
    public function registerEmployee(string $name, string $last_name, string $email, string $password, string $phone, string $service, string $description, int $year_exp, string $country, string $city)
	{
	
		$status= 1 ;
		$role = 'ROLE_Employee';
		$queryEmployee = $this->db->query("INSERT INTO trabajadores (name, last_name, email, password, phone, service, description, year_exp, country, city, status, role) VALUES ({$name}, {$last_name}, {$email}, {$password}, {$phone}, {$service}, {$description}, {$year_exp}, {$country}, {$city}, {$status}, {$role}) ");

		return  $queryEmployee;
	}
}
// ALTER TABLE tablename AUTO_INCREMENT = 1

// INSERT INTO `trabajadores` (`ID_Trabajador`, `name`, `last_name`, `email`, `password`, `phone`, `service`, `description`, `year_exp`, `country`, `city`, `status`, `role`) VALUES (NULL, 'Gabriel', 'Morales', 'gmorales@gmail.com', '123456', '593978775042', 'Programador', 'Excepteur deserunt adipisicing aliqua laborum non voluptate tempor nulla est duis non id. Aliqua dolor nulla aliqua consequat ad tempor cillum proident sint minim ex laborum. Laboris pariatur quis Lorem in ex ipsum laborum irure. Proident dolor laboris eiusmod duis ad irure anim. Magna sint nulla ea id laborum cupidatat commodo labore tempor cupidatat qui dolore incididunt incididunt.', '2', 'Ecuador', 'Quito', '1', 'ROLE_Employee');