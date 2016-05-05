<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8"/>
        <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet" href="app/view/css/reset.css">
        <link rel="stylesheet" type="text/css" href="app/view/css/index.css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
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
                    <div class="search">
                        <input list="browsers">
                        <datalist id="browsers">
                            <?php
                                //consulta
                                //recorrer las filas de la consulta
                                include("app/controller/ingredientesController.php");
                                $ingredientes = new Ingrediente();
                                $lista=$ingredientes->ingredientesArray();
                                foreach ($lista as $key => $value) {
                                   echo '<option value="'.$value.'">';
                                }
                                ?>
                        </datalist>
                        <button type="submit" name="add">Añadir</button>
                        <button type="submit" name="search">Buscar</button>
                        <textarea class="textarea"></textarea>

                    </div>
                </div>
            </div>
        </body>
    </html>