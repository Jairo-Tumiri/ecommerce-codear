<?php
    require_once "../config/database.php";
    // if($_SESSION['username'] == null){
    // echo "<script>alert('Por favor registrarse o iniciar sesion.')</script>";
    // header("Refresh:0 , url = ../index.html");
    // exit();

    // }

    $sql_fetch_todos = "SELECT * FROM productos ORDER BY id_producto ASC";
    $query = mysqli_query($conexion, $sql_fetch_todos);

    $direccion="../../img/plantillas/";
    include 'header.php';
?>

<div class="contenedor-plantillas">
    <br>
    <br>
    <div class="title">
        <h2>Tabla de Plantillas</h2>
    </div>
    <br>
    <table>
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">id</th>
                <th scope="col">Nom:Plantilla</th>
                <th scope="col">Creador</th>
                <th scope="col">Precio</th>
                <th scope="col">Membresia</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $idplantilla = 1;
                while ($datos = mysqli_fetch_array($query)) { ?>
            <tr>    
                <td scope="datos"><?php echo $idplantilla?></td>
                <td><?php echo $datos['id_producto']?></td>
                <td><?php echo $datos['nombre']?></td>
                <td><?php echo $datos['creador']?></td>
                <td><?php echo $datos['precio']?></td>
                <td><?php echo $datos['id_membresia']?></td>
            </tr>
            <?php $idplantilla++;} ?>
            
        </tbody>

    </table>


    <div class="fixproduct">


        <form method="POST" action="action/codEditarPlantilla.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Imagen del Producto</label>
                <br>
                <img class="imagen_demostracion" src="<?php echo $_GET['img-plantilla']; ?>" alt="" style="width: 100px;" >
                <br>
                <label for="exampleInputEmail">Inserte nueva foto</label>
                <br>
                <input type="text" class="form-control" name="img-plantilla" value="<?php echo $_GET['img-plantilla']; ?>" required>
            </div>
        
            <div class="form-group">
                <label for="exampleInputEmail1">Iframe de Plantilla</label>
                <br>
                <input type="text" class="form-control" name="iframe-plantilla" value="<?php echo $_GET['iframe-plantilla']; ?>" required>
                <br>
                <!-- <iframe style="width: 100%;" src="<?php echo $_GET['iframe-plantilla']; ?>" frameborder="0"></iframe> -->
            </div>    

            <div class="form-group">
                <label for="exampleInputEmail1">Nombre del Producto</label>
                <br>
                <input type="text" class="form-control" name="nom-plantilla" value="<?php echo $_GET['nom-plantilla']; ?>" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Creador del Producto </label>
                <br>
                <input type="text" class="form-control" name="cread-plantilla" value="<?php echo $_GET['cread-plantilla']?>" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>
                <br>
                <input type="text" class="form-control" name="descripcion1-plantilla" value="<?php echo $_GET['descripcion1-plantilla']; ?>" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>
                <br>
                <input type="text" class="form-control" name="descripcion2-plantilla" value="<?php echo $_GET['descripcion2-plantilla']; ?>" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">link de descarga</label>
                <br>
                <input type="text" class="form-control" name="linkdescarga-plantilla" value="<?php echo $_GET['linkdescarga-plantilla']; ?>" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Precio</label>
                <br>
                <input type="number" class="form-control" name="precio-plantilla" value="<?php echo $_GET['precio-plantilla']?>" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Categoria</label>
                <br>
                <input type="number" class="form-control" name="categ-plantilla" value="<?php echo $_GET['categ-plantilla']?>" required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Tipo de membresia</label>
                <br>
                <input type="text" value="<?php echo $_GET['memb-plantilla'] ?>" class="form-control" name="memb-plantilla" required>
                <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id" />
            </div>




            <br>
            <div class="form-button">
                <button type="submit" class="modify" style="float:right">Editar</button>
                <a name="" id="" class="return" href="plantillas.php" role="button" style="float:left">Volver</a>
            </div>
        </form>
    </div>
    <?php
    mysqli_close($conexion);
    ?>
</body>
</html>