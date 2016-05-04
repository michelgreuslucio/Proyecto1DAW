<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8"/>
        <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet" type="text/css" href="app/view/css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="app/view/css/reset.css">
        <link rel="stylesheet" href="app/view/css/supersized.css">
        <link rel="stylesheet" href="app/view/css/style.css">
    </head>
        <body>
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
        </body>
    </html>