<?php

<<<<<<< HEAD
//Fer algo per a tindrer els directoris accesibles.

$page = "login";

switch($page) {
	case "login":
		include("app/view/default/pages/auth.php");
		break;
	case "register":
		include("app/view/default/pages/auth.php");
		break;
	case "search":
		include("app/view/default/pages/search.php");
		break;
	case "profile":
		include("app/view/default/pages/profile.php");
		break;
	default:
		include("app/view/default/index.php");
		break;
}
=======
>>>>>>> cc7d084892a4795596ea36c0191d6d2459bf5ded

?>