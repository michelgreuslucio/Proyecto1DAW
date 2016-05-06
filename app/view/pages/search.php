<div class="page-container">
                    <div class="search">
                        <form action = "index.php" method = "get">
                            <input list="browsers">
                            <datalist id="browsers">
                                <?php
                                   include("app/controller/ingredientesController.php");
                                   $receta = new Receta();
                                    $lista=$receta->ingredientesArray();
                                    foreach ($lista as $key => $value) {
                                        echo $value;
                                    }
                                    ?>
                            </datalist>
                            <button onclick="window.history.go(-1);">Refinar Busqueda</button>
                            <input type="hidden" name="action" value="search">
                            <textarea class="textarea"></textarea>
                        </form>
                    </div>
            </div>