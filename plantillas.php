<?php 
    // require 'inventario/config/database.php';

    // $sql_fetch_todos = "SELECT * FROM product ORDER BY id ASC";
    // $query = mysqli_query($conn, $sql_fetch_todos);

include 'head.php'; ?>
   
<!-- PARTE DEL HEAD ESTA ARRIBA -->

    <main id="cuerpo-plantillas">

        <div class="contenedor-buscador">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text"  placeholder="EN CONDEAR PODES BUSCAR TU PLANTILLA">
        </div>

        <div class="contenedor-card">
            <div class="filtro">
                <h1>Elige tu plantillas favorita</h1>
                <div class="categoria">
                    <button type="button" class="boton">Plantillas Premium</button>
                    <button type="button" class="boton">Todas las Plantillas</button>
                    <button type="button" class="boton">Plantillas Basicas</button>
                </div>
            </div>
            <br>

            <div class="cards" id="cards">
                <?php
                    while ($datos = mysqli_fetch_array($query)) { 
                ?> 
                <div class="card">
                    <?php
                        switch($datos['id_membresia']){
                            case "1":
                                $imagen = 'premium.png';
                                $membresia = 'PREMIUM';
                                break;
                            case "2":
                                $imagen = 'gratis.png';
                                $membresia = 'GRATIS';
                                break;
                        }
                    ?>
                    <img class="mem-icon" src="img/logo/<?php echo $imagen?>">
                    <div class="card-hidden">
                        <img class="pro-img" src="<?php echo $datos['imagen']?>" alt="" />
                        <div class="action">
                            <a class="boton" href="inventario/login.php">Detalles</a>
                        </div>
                        <div class="card-text">
                                <p class="pro-nom"><?php echo $datos['nombre']?></p>
                                <p class="pro-categoria"><?php echo $membresia?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <!-- <div class="card">
                    <img class="mem-icon" src="img/logo/gratis.png">
                    <img class="pro-img" src="img/plantillas/9.webp" alt="" />
                    <div class="action">
                        <button class="boton">Detalles</button>
                    </div>
                    <div class="card-text">
                            <p class="pro-nom">Laptop Bags</p>
                            <p class="pro-categoria">Gratis</p>
                    </div>
                </div>

                <div class="card">
                    <img class="mem-icon" src="img/logo/premium.png">
                    <img class="pro-img" src="img/plantillas/9.webp" alt="" />
                    <div class="action">
                        <button class="boton">Detalles</button>
                    </div>
                    <div class="card-text">
                            <p class="pro-nom">Laptop Bags</p>
                            <p class="pro-categoria">Premium</p>
                    </div>
                </div> -->

 
            </div>
        </div>
        
    </main>
    <br>
    <br>


<!-- PARTE DEL FOOTER ESTA ABAJOs -->

<?php include 'footer.php'; ?>