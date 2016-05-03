<?php

$pageTitle = "Auth";

include("app/view/include/header.php");
echo "Login/Register";

?>

<div class="login">
        <div class="page-container">
           <div class="titulo">
                Termibux
            </div>
           <div class="subtitulo">
                Busca y encuentra tus recetas.
            </div>
            <form action="app/controller/userController.php" method="post">
                <input type="text" name="username" class="username" placeholder="Nombre de usuario">
                <input type="password" name="password" class="password" placeholder="Contraseña">
                <input type="email" name="email" class="email" placeholder="Correo">
                <button type="submit" name="register">Regístrate</button>
            </form>
        </div>
</div>

<?php
//if user esta logueat:
include("app/view/include/footer.php");
?>