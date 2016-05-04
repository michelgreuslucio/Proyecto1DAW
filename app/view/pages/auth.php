<?php

include("app/view/include/header.php");

if($_GET["page"] == "register") {
    echo "Register";
    print('
        <div class="login">
            <div class="page-container">
                    <div class="titulo">Termibux</div>
               <div class="subtitulo">Busca y encuentra tus recetas.</div>

                <form action="app/controller/userController.php?action=register" method="post">
                    <input type="text" name="username" class="username" placeholder="Nombre de usuario">
                    <input type="password" name="password" class="password" placeholder="Contraseña">
                    <input type="email" name="email" class="email" placeholder="Correo">
                    <button type="submit" name="register">Regístrate</button>
                </form>
            </div>
        </div>
    ');
}

elseif($_GET["page" ] == "login") {
    echo "Login";
    print('
        <div class="login">
            <div class="page-container">
                    <div class="titulo">Termibux</div>
               <div class="subtitulo">Busca y encuentra tus recetas.</div>

                <form action="app/controller/userController.php?action=login" method="post">
                    <input type="text" name="username" class="username" placeholder="Nombre de usuario">
                    <input type="password" name="password" class="password" placeholder="Contraseña">
                    <input type="email" name="email" class="email" placeholder="Correo">
                    <button type="submit" name="register">Regístrate</button>
                </form>
            </div>
        </div>
    ');
}

?>



<?php
include("app/view/include/footer.php");
?>