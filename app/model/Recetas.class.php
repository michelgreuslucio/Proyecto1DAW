<?php

include_once("Database.class.php");

class Receta extends Database {

	//Insertar Receta en la base de datos.
	function insertarReceta(/*Campos Recetas*/)	{
		$this->conectar();
		$sql = "INSERT INTO recetas VALUES (/*campos a insertar de la tabla recetas*/)";
		if ($query = $this->consulta($sql)) {
			$this->desconectar();
			return true;
		}
		else {
			$this->desconectar();
			return false;
		}
	}

	//Editar Receta
	function editarReceta(/*campos a insertar de la tabla recetas*/) {
		$this->conectar();
		$sql = "UPDATE usuarios SET /*campos a insertar de la tabla recetas*/";
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