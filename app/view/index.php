            <div class="page-container">

                <div class="title">Termibux</div>
                <div class="subtitle">Busca y encuentra tus recetas.</div>

                <div class="search">
                    <form action = "index.php" method = "get">
                        <input class="datalist" list="browsers">
                        <datalist id="browsers">
                            <?php
                               include("app/controller/ingredientesController.php");
                               $ingredientes = new Ingrediente();
                                $lista=$ingredientes->ingredientesArray();
                                foreach ($lista as $key => $value) {
                                    print("<option value=".$value.">\n");
                                }
                                ?>
                        </datalist>
                        <button class="button" type="button" onclick="">Añadir</button>
                        <input class="button" type = "submit" value = "Buscar">
                        <input type="hidden" name="action" value="search">
                        <div class="listIngre"></div>
                    </form>
                </div>
            </div>