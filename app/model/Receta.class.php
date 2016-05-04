<?php

include_once("Database.class.php");

class Receta extends Database {

	//Insertar Receta en la base de datos.
	function insertarReceta(/*Campos Recetas*/)	{
		$this->conectar();
		$sql = "INSERT INTO recetas(nombreReceta/*cosas*/) VALUES ('$nombre', '$ingredientes', '$pasos')";//Cambiar cuando esté claro
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

	//Eliminar receta
	function eliminarReceta($idReceta) {
		$this->conectar();
		$sql = "DELETE FROM receta WHERE id_receta='$idReceta'";
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
	function recetasArray() {
		$this->conectar();
		$sql = "SELECT id, nombre FROM recetas";
		if($this->numeroFilas($sql) > 0) {		
			while ($currentReceta = $this->datosArray($query)) {
				$ids[] = $currentReceta["id"];
				$nombres[] = $currentReceta["nombre"];
			}
			$this->desconectar();
			return array("ids" => $ids, "nombres" => $nombres);
		}
		else {
			$this->desconectar();
			return 'No hay recetas';
		}	

	}
}

?>