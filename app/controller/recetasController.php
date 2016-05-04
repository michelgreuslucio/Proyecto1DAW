<?php 

require 'app/model/Recetas.class.php';

//"Funcion" de Insertar Receta
if(isset($_GET["action"])) {
	$receta = new Receta();
	switch($_GET["action"]) {
		case "insertarReceta":
			$receta->insertarReceta($_POST["imagenReceta"], $_POST["nombreReceta"], $_POST["pasos"], $_POST["ingredientes"], $_POST["user"]);
			break;
		case "editarReceta":
			$receta->actualizarReceta($_POST["NuevaImagen"], $_POST["nuevoNombre"], $_POST["NuevosPasos"], $_POST["nuevosIngredientes"], $_POST["user"]);
			break;
		case "recetasArray":
			$receta->recetasArray();
			break;
		case "eliminarReceta":
			$receta->eliminarReceta($idReceta);
		default:
			$receta->desconectar();
			break;
	}

	
else {
	//Error
}

?>