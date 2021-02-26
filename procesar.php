<?php

 if (isset($_POST['nombre']))
	
	//codificamos el password
	$password = Password::codPassword($password);
	
	//creamos un array con los datos del registro para ser enviados al modelo.
	$datos = [
		"nombre" => $_POST['nombre'],
		"apellido" => $_POST['apellido'],
		"email" => $email=$_POST["email"],
		"password" => $password
	];
	
	//
	var_dump($datos);

// clase para codificar el password
class Password {
		public static function codPassword($password) {
			return password_hash($password, PASSWORD_DEFAULT, ['cost' => 15]);
		}
	}

?>