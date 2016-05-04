<?php 

include_once($_SERVER['DOCUMENT_ROOT'] ."/GitHub/Proyecto1DAW/app/model/Usuarios.class.php");

if(isset($_GET["action"])) {
	switch($_GET["action"]) {
		case "login":
			break;
		case "register":
			$usuario = new Usuario();
			$usuario->registrarUsuario($_POST["username"], $_POST["password"], $_POST["email"]);
			break;
		case "edit":
			$usuario = new Usuario();
			$usuario->editarUsuario($_POST["newPassword"], $_POST["newEmail"], $currentUser);//Falta algo per a traurer el currentUser
			break;
		case "no-member":
			//dejar que vea la web como visitante(sin login)
			break;
		default:
			//En caso de que no se seleccione nada de lo anterior(Poco probable de que pase).
			break;
	}
}

?>