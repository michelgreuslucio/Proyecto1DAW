<?php 

require 'app/model/Usuarios.class.php';

function registrarUsuario() {
	$usuario = new Usuario();
	$usuario->registrarUsuario($_POST["username"], $_POST["password"], $_POST["email"]);
}

function loginUsuario() {}

?>