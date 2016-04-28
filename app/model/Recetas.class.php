<?php

include_once("Database.class.php");

class Receta extends Database {

	//Insertar Receta en la base de datos.
	function insertarReceta(/*Campos Recetas*/)	{
		$this->conectar();
		$sql = "INSERT INTO usuarios VALUES ('$username', '$password', '$email')";
		if ($query = $this->consulta($sql)) {
			$this->desconectar();
			return true;
		}
		else {
			$this->desconectar();
			return false;
		}
	}

	function actualizarUsuario($newPassword, $newEmail, $user) {
		$this->conectar();
		$sql = "UPDATE usuarios SET password='$newPassword', email='$newEmail' WHERE username=$user";
		if ($query = $this->consulta($sql)) {
			$this->desconectar();
			return true;
		}
		else {
			$this->desconectar();
			return false;
		}
	}
}

?>