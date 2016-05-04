<?php

//Fer algo per a tindrer els directoris accesibles.

if(empty($_GET)) {
	$pageTitle = "Termibux";
	include("app/view/index.php");
}
else {
	switch($_GET["action"]) {
		case "login":
			$_GET["page"] = "login";
			$pageTitle = "Login";
			include("app/view/pages/auth.php");
			break;
		case "register":
			$_GET["page"] = "register";
			$pageTitle = "Register";
			include("app/view/pages/auth.php");
			break;
		default:
			$pageTitle = "Termibux";
			include("app/view/index.php");
			break;
	}
	
}

?>