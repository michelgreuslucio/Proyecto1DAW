<?php

include_once("Database.class.php");

class Ingrediente extends Database {

	//Insertar Ingrediente en la base de datos.
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
		$sql = "UPDATE ingredientes SET password='$newPassword', email='$newEmail' WHERE username='$user'";
		if ($query = $this->consulta($sql)) {
			$this->desconectar();
			return true;
		}
		else {
			$this->desconectar();
			return false;
		}
	}

	//Elimina un ingrediente
	function eliminarIngrediente($idIngrediente) {
		$this->conectar();
		$sql = "DELETE FROM ingredientes WHERE id_ingrediente='$idIngrediente'";
		if ($query = $this->consulta($sql)) {
			$this->desconectar();
			return true;
		}
		else {
			$this->desconectar();
			return false;
		}
	}

	//Devuelve un array con los datos
	function ingredientesArray() {
		$this->conectar();
		$sql = "SELECT nombre FROM ingredientes";
		$resultado = $this->consulta($sql);
		if($this->numeroFilas($resultado) > 0) {		
			while ($currentIngredient = $this->datosArray($resultado)) {
				//$ids[] = $currentIngredient["id"];
				//$nombres[] = $currentIngredient["nombre"];
				$nombres[] = $currentIngredient->nombre;
			}
			$this->desconectar();
			//return array("ids" => $ids, "nombres" => $nombres);
			return $nombres;
		}
		else {
			$this->desconectar();
			return 'No hay ingredientes jiji';
		}	

	}

}

?>