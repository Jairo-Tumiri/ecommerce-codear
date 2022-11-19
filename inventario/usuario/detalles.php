<?php
    include '../identidad.php';
    switch ($tipoUsuario){
        case "2":
            include 'premium.php';
            break;
        case "3":
            include 'basico.php';
            break;
    }
    switch($_GET['memb-plantilla']){
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
    <script src="https://kit.fontawesome.com/41bcea2ae3.js"></script>
    <link rel="stylesheet" href="styleDetalles.css">
    <main id="detalles">
        <div class="header-detalles">
            <a href="plantillas.php"><i class="fa-solid fa-backward"></i></a>
        </div>        
        <div class="contenedor-detalles">
            <div class="contenedor-detalles__seccion1">
                <div class="seccion1-presentacion">
                    <h1><?php echo $_GET['nombre-plantilla']?></h1>
                    <h2><?php echo "$".$_GET['precio-plantilla']?></h2>
                    <h4><?php echo $membresia?></h4>
                    <h4><?php echo $_GET['cread-plantilla']?></h4>
                    <br><br>
                    <a class="boton" href="<?php echo $_GET['linkdescarga-plantilla']?>">Descargar</a>
                    <br>
                    <a class="boton" href="<?php echo $_GET['iframe-plantilla']?>" target="_blank">Ver Plantilla</a>
                    <br>
                    <br>
                    <h2>Formato Pantalla Computadora</h2>
                    <br>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, error dignissimos et accusamus molestias nihil dolorem laborum alias vel pariatur voluptatum rerum quisquam hic, doloribus aperiam suscipit ab. Magni, eius!</p>
                </div>
                <div class="seccion1-imagen">
                    <img src="<?php echo $_GET['img-plantilla']?>" alt="">
                </div>
            </div>
            <div class="contenedor-detalles__seccion2">
                <div class="mockups seccion2-imagen">
                    <iframe src="<?php echo $_GET['iframe-plantilla']?>" frameborder="0"></iframe>
                </div>
                <div class="seccion2-texto">
                    <h2>Formato Pantalla Celular</h2>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas iusto veniam ullam sed voluptate delectus et! Eligendi accusantium minima tenetur ipsa quia maiores, sequi est neque consectetur, dignissimos, officiis ratione.</p>
                    <br>
                    <br>
                    <h2>Puntos Fuertes</h2>
                    <br>
                    <ul>
                        <li>Responsivo</li>
                        <li>##########################100%</li>
                        <br>
                        <li>bootrap version 5.1</li>
                        <li>#################60%</li>
                        <br>
                        <li>50% javaScript</li>
                        <li>##############50%</li>
                        <br>
                        <li>100% Html</li>
                        <li>#########################100%</li>
                        <br>
                        <li>40% CSS </li>
                        <li>########40%</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>
</html>