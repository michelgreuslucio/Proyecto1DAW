<?php

include_once("Database.class.php");

class Ingrediente extends Database {

	//Insertar Usuario en la base de datos.
	function insertarIngrediente($nombre)	{
		$this->conectar();
		$sql = "INSERT INTO ingredientes VALUES ('$nombre')";
		if ($query = $this->consulta($sql)) {
			$this->desconectar();
			return true;
		}
		else {
			$this->desconectar();
			return false;
		}
	}

	//Editar Ingrediente
	function editarIngrediente($newPassword, $newEmail, $user) {
		$this->conectar();
		$sql = "UPDATE usuarios SET password='$newPassword', email='$newEmail' WHERE username='$user'";
		if ($query = $this->consulta($sql)) {
			$this->desconectar();
			return true;
		}
		else {
			$this->desconectar();
			return false;
		}
	}

	function getIngredientes() {
		$this->conectar();
		$sql = "SELECT nombre FROM ingredientes";
		if($this->numeroFilas($sql) > 0) {		
			while ($tsArray = $this->datosArray($query)) {
				$data[] = $tsArray;
			}
			return $data;
		}
		else {	
			return 'No hay ingredientes jiji';
		}	

	}
}

?>