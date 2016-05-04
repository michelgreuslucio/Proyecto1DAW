<?php 

include_once($_SERVER['DOCUMENT_ROOT'] ."/GitHub/Proyecto1DAW/app/model/Usuarios.class.php");

if(isset($_GET["action"])) {
	$usuario = new Usuario();
	switch($_GET["action"]) {
		case "login":
			break;
		case "register":
			$usuario->registrarUsuario($_POST["username"], $_POST["password"], $_POST["email"]);
			break;
		case "edit":
			$usuario->editarUsuario($_POST["newPassword"], $_POST["newEmail"], $_SERVER["currentUser"]);//Falta algo per a traurer el currentUser
			break;
		case "no-member":
			//guest
			break;
		default:
			$usuario->desconectar();
			//En caso de que no se seleccione nada de lo anterior(Poco probable de que pase).
			break;
	}
}
else {
	//Whatever
}

?>