<?php 

include_once($_SERVER['DOCUMENT_ROOT'] ."/GitHub/Proyecto1DAW/app/model/Ingrediente.class.php");

if(isset($_GET["action"])) {
	$ingrediente = new Ingrediente();
	switch($_GET["action"]) {
		case "insertReceta":
			$ingrediente->insertarIngrediente($ingredienteName);
			break;
		case "editarIngrediente":
			$ingrediente->editarIngrediente($ingredienteName);
			break;
		case "ingredientesArray":
			echo "hola";
			$ingrediente->ingredientesArray();
			break;
		case "deleteIngrediente":
			$ingrediente->eliminarIngrediente($_POST["idIngrediene"]);
			break;
		default:
			$ingrediente->desconectar();
			break;
	}
}
else {
	//Whatever
}

?>