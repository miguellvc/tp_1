<?php
if (isset($_POST['nombre'])) {

 //recibimos los datos del formulario que vienen por Post
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $email=$_POST["email"];
 $password=$_POST["password"];
	
	//codificamos el password
	$password = Password::codPassword($password);
	
	//creamos un array con los datos del registro para ser enviados al modelo.
	$datos = [
		"nombre" => $nombre,
		"apellido" => $apellido,
		"email" => $email,
		"password" => $password
	];
	
	//
	var_dump($datos);
}
// clase para codificar el password
class Password {
		public static function codPassword($password) {
			return password_hash($password, PASSWORD_DEFAULT, ['cost' => 15]);
		}
	}

?>