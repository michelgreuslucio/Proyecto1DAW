<?php

//Sesion
$pageTitle = "Termibux";
include("app/view/include/header.php");

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
		case "search":
			$pageTitle = "Buscar";
			include("app/view/pages/search.php");
			break;
		case "receta":
			$pageTitle = "Receta";
			include("app/view/pages/receta.php");
			break;
		default:
			$pageTitle = "Termibux";
			include("app/view/index.php");
			break;
	}
	
}

include("app/view/include/footer.php");

?>