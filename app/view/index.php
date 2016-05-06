            <div class="page-container">
                    <div class="titulo">
                        Termibux
                    </div>
                    <div class="subtitulo">
                        Busca y encuentra tus recetas.
                    </div>
                    <div class="search">
                        <form action = "index.php" method = "get">
                            <input list="browsers">
                            <datalist id="browsers">
                                <?php
                                   include("app/controller/ingredientesController.php");
                                   $ingredientes = new Ingrediente();
                                    $lista=$ingredientes->ingredientesArray();
                                    foreach ($lista as $key => $value) {
                                        echo '<option value="'.$value.'">';
                                    }
                                    ?>
                            </datalist>
                            <button type="button" onclick="">Añadir</button>
                            <input class="button" type = "submit" value = "Buscar">
                            <input type="hidden" name="action" value="search">
                            <textarea class="textarea"></textarea>
                        </form>
                    </div>
            </div>