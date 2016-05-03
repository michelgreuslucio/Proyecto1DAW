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
            <form action="/GitHub/Proyecto1DAW/app/controller/userController.php" method="post">
                <input type="text" name="username" class="username" placeholder="Nombre de usuario">
                <input type="password" name="password" class="password" placeholder="Contraseña">
                <input type="email" name="email" class="email" placeholder="Correo">
                <button type="submit" name="register">Regístrate</button>
            </form>
        </div>
</div>



<?php
include("include/footer.php");
?>