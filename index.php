<?php

//Fer algo per a tindrer els directoris accesibles

if(empty($_GET)) {
	$pageTitle = "Termibux";
	include("app/view/index.php");
}
else {

	switch($_GET["page"]) {
		case "login":
			include("app/view/pages/auth.php");
			break;
		case "register":
			include("app/view/pages/auth.php");
			break;
		default:
			$pageTitle = "Termibux";
			include("app/view/index.php");
			break;
	}
	
}

?>