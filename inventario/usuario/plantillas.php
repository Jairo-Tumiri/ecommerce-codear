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

?>
    <br>
    <h2 id="heading">ELEGI TU PLANTILLA FAVORITA</h2>
    <br>
    <div class="categories">
        <div class="filtros">
        <label class="label-predeterminado" for="">CATEGORIA</label>
        <input class="input-predeterminado" list="filtro-categoria">
        <datalist id="filtro-categoria">
            <option value="HTML">
            <option value="CSS">
            <option value="HTML Y CSS">
            <option value="JAVASCRIP">
        </datalist>
        </div>
        <div class="filtros">
        <label class="label-predeterminado" for="">PRECIO</label>
        <input class="input-predeterminado" list="filtro-precio">
        <datalist id="filtro-precio" name="filtro-categoria">
            <option value="MENOR PRECIO">
            <option value="MAYOR PRECIO">
        </datalist>
        </div>
        <div class="filtros">
        <label class="label-predeterminado" for="">CREADOR</label>
        <input class="input-predeterminado" list="filtro-descargas" >
        <datalist id="filtro-descargas">
            <option value="MAS DESCARGADAS">
            <option value="MENOS DESCARGADAS">
        </datalist>
        </div>
    </div>
    <br>
    <div class="contenedor-plantillas">
        <br>
        <div class="title">
            <h2>Tabla de Plantillas de <?php echo $nombreUsuario?></h2>
        </div>
        <br>
        <div class="cards" id="cards">
            <?php
                while ($datos = mysqli_fetch_array($plantillas)) { 
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
                <img class="mem-icon" src="../../img/logo/<?php echo $imagen?>">
                <div class="card-hidden">
                    <div class="pro-img">
                        <img src="<?php echo $datos['imagen']?>" alt="" />
                    </div>
                    <div class="action">
                        <a name="detalles" class="boton" href="detalles.php?id=<?php echo $datos['id_producto'] ?>&img-plantilla=<?php echo $datos['imagen'] ?>&iframe-plantilla=<?php echo $datos['iframe'] ?>&nombre-plantilla=<?php echo $datos['nombre'] ?>&cread-plantilla=<?php echo $datos['creador'] ?>&descripcion1-plantilla=<?php echo $datos['descripcion_uno']; ?>&descripcion2-plantilla=<?php echo $datos['descripcion_dos']; ?>&linkdescarga-plantilla=<?php echo $datos['link_descarga']; ?>&precio-plantilla=<?php echo $datos['precio']; ?>&categ-plantilla=<?php echo $datos['id_categoria']?>&memb-plantilla=<?php echo $datos['id_membresia']?>" role="button">Detalles</a>
                        <br><br>
                        <a class="boton" href="<?php echo $datos['link_descarga']?>">Descargar</a>
                    </div>
                    <div class="card-text">
                            <p class="pro-nom"><?php echo $datos['nombre']?></p>
                            <p class="pro-categoria"><?php echo $membresia?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
    <?php mysqli_close($conexion); ?>
</body>
</html>