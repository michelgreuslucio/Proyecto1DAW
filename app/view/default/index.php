<?php
include("include/header.php");
include("../../controller/userController.php");
?>


<div class="login">
        <div class="page-container">
           <div class="titulo">
                Termibux
            </div>
           <div class="subtitulo">
                Busca y encuentra tus recetas.
            </div>
            <form action="index.php" method="post">
                <input type="text" name="username" class="username" placeholder="Nombre de usuario">
                <input type="password" name="password" class="password" placeholder="Contraseña">
                <button type="submit" name="login">Entra</button>
                <button type="submit" name="register">Regístrate</button>
                <button class="ghost-button" type="submit" name="no-member">Entra sin registrarse</button>
            </form>
        </div>
</div>



<?php
include("include/footer.php");
?>