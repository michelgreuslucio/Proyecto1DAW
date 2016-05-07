<?php

include("app/model/Ingrediente.class.php");

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
			$ingrediente->ingredientesArray();
			break;
		case "listarIngredientes":
			$lista=$ingredientes->ingredientesArray();
            foreach ($lista as $key => $value) {
                print("<option value=".$value.">\n");
            }
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