<?php
require_once '../config/database.php';
include 'header.php';
    $sql_fetch_todos = "SELECT * FROM productos ORDER BY id_producto ASC";
    $query = mysqli_query($conexion, $sql_fetch_todos);


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

    <div class="addproduct">

        <form method="POST" action="action/codAgregarPlantilla.php" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputEmail1">Imagen de Plantilla</label>
                <br>
                <input type="text" class="form-control" name="img-plantilla" required>
                <!-- <input type="file" class="form-control" name="img-plantilla" required> -->
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Iframe de Plantilla</label>
                <br>
                <input type="text" class="form-control" name="iframe-plantilla" required>
            </div>    

            <div class="form-group">
                <label for="exampleInputEmail1">Nombre de Plantilla</label>
                <br>
                <input type="text" class="form-control" name="nom-plantilla" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Creador de Plantilla</label>
                <br>
                <input type="text" class="form-control" name="cread-plantilla" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>
                <br>
                <input type="text" class="form-control" name="descripcion1-plantilla"  required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>
                <br>
                <input type="text" class="form-control" name="descripcion2-plantilla"  required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">link de descarga</label>
                <br>
                <input type="text" class="form-control" name="linkdescarga-plantilla"  required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Precio</label>
                <br>
                <input type="number" class="form-control" name="precio-plantilla" required> 
            </div> 

            <div class="form-group">
                <label for="exampleInputPassword1">Categoria</label>
                <br>
                <input type="number" class="form-control" name="categ-plantilla" required> 
            </div> 

            <div class="form-group">
                <label for="exampleInputPassword1">Tipo de membresia</label>
                <br>
                <input type="number" class="form-control" name="memb-plantilla" required> 
            </div> 

            <br>
            <div class="form-button">
                <button type="submit" class="modify" style="float:right">Agregar Producto</button>
                <a name="" id="" class="return" href="plantillas.php" role="button" style="float:left">Volver</a>
            </div>

        </form>
    </div>

</div>
<?php mysqli_close($conexion); ?>
</body>
</html>