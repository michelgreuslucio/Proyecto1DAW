<?php

include_once("Database.class.php");

class Usuario extends Database {

	//Insertar Usuario en la base de datos.
	function registrarUsuario($username, $password, $email) {
		$this->conectar();	
		$sql = "INSERT INTO usuarios VALUES ('$username', '$password', '$email')";	
		if($query = $this->consulta($sql)){
			$this->desconectar();	
			return true;
		}
		else {
			$this->desconectar();	
			return false;
		}
}

?>