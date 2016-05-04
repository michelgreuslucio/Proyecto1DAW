<?php 

require 'app/model/Recetas.class.php';

//"Funcion" de Insertar Receta
<<<<<<< HEAD
if(isset($_GET["insertarReceta"])) {
	$receta = new Receta();
	$receta->insertarReceta(/*campos a insertar de la tabla recetas*/);
}
//"Funcion" de Editar Receta
if(isset($_GET["editarReceta"])) {}
=======
if(isset($_POST["insertReceta"])) {
	$receta = new Receta();
	$receta->insertReceta($titulo, $ingredientes, $pasos);
}
//"Funcion" de Editar Receta
elseif(isset($_POST["editReceta"])) {
	$usuario = new Receta();
	$usuario->actualizarReceta($_POST["newTitle"], $_POST["newIngredients"], $_POST["newPasos");//Cambiar cuando esté claro
}
>>>>>>> cc7d084892a4795596ea36c0191d6d2459bf5ded
//En caso de que no se seleccione nada de lo anterior(Muy poco probable de que pase).
else {
	//Display algún error.
}

?>