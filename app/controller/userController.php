<?php 

include_once($_SERVER['DOCUMENT_ROOT'] ."/GitHub/Proyecto1DAW/app/model/Usuarios.class.php");

//"Funcion" de Registrar Usuario
if(isset($_POST["register"])) {
	$usuario = new Usuario();
	$usuario->registrarUsuario($_POST["username"], $_POST["password"], $_POST["email"]);
}
//"Funcion" de Login Usuario
elseif(isset($_POST["login"])) {}
//"Funcion" de Editar Usuario
elseif(isset($_POST["editUser"])) {
	$usuario = new Usuario();
	$usuario->actualizarUsuario($_POST["newPassword"], $_POST["newEmail"], $currentUser);//Falta algo per a traurer el currentUser
}
elseif(isset($_POST["no-member"])) {
	//dejar que vea la web como visitante(sin login)
}
//En caso de que no se seleccione nada de lo anterior(Muy poco probable de que pase).
else{
	//Display algún error.
}

?>