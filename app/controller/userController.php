<?php 

require 'app/model/Usuarios.class.php';

//"Funcion" de Registrar Usuario
if(isset($_GET["register"])) {
	$usuario = new Usuario();
	$usuario->registrarUsuario($_GET["username"], $_GET["password"], $_GET["email"]);
}
//"Funcion" de Login Usuario
elseif(isset($_GET["login"])) {}
//"Funcion" de Editar Usuario
elseif(isset($_GET["editUser"])) {
	$usuario = new Usuario();
	$usuario->editarUsuario($_GET["newPassword"], $_GET["newEmail"], $currentUser);//Falta algo per a traurer el currentUser
}
//En caso de que no se seleccione nada de lo anterior(Muy poco probable de que pase).
else {
	//Display algún error.
}

?>