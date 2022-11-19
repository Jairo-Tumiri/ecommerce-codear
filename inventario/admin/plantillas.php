<?php
    require_once '../config/database.php';

    $sql_fetch_todos = "SELECT * FROM productos ORDER BY id_producto ASC";
    $query = mysqli_query($conexion, $sql_fetch_todos);

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
        <tr>
            <th scope="col">N°</th>
            <th scope="col">id</th>
            <th scope="col">Nom:Plantilla</th>
            <th scope="col">Creador</th>
            <th scope="col">Precio</th>
            <th scope="col">Membresia</th>
            <th scope="col">Acciones</th>
        </tr>
        <tbody>
            <?php
                $idplantilla = 1;
                while ($datos = mysqli_fetch_array($query)) { ?>
                <tr>    
                    <td scope="datos"><?php echo $idplantilla; ?></td>
                    <td><?php echo $datos['id_producto']; ?></td>
                    <td><?php echo $datos['nombre']; ?></td>
                    <td><?php echo $datos['creador']; ?></td>
                    <td><?php echo "$" . $datos['precio']; ?></td>
                    <td><?php echo $datos['id_membresia']; ?></td>
                    <td>
                        <a name="edit" href="editarPlantilla.php?id=<?php echo $datos['id_producto'] ?>&img-plantilla=<?php echo $datos['imagen'] ?>&iframe-plantilla=<?php echo $datos['iframe'] ?>&nom-plantilla=<?php echo $datos['nombre'] ?>&cread-plantilla=<?php echo $datos['creador'] ?>&descripcion1-plantilla=<?php echo $datos['descripcion_uno']; ?>&descripcion2-plantilla=<?php echo $datos['descripcion_dos']; ?>&linkdescarga-plantilla=<?php echo $datos['link_descarga']; ?>&precio-plantilla=<?php echo $datos['precio']; ?>&categ-plantilla=<?php echo $datos['id_categoria']?>&memb-plantilla=<?php echo $datos['id_membresia']?>" role="button">
                            <i class="btn-editar fa-solid fa-pen-to-square"></i>
                        </a>

                        <a name="id" href="action/eliminarPlantilla.php?id=<?php echo $datos['id_producto'] ?>" role="button"><i class="btn-eliminar fa-solid fa-square-minus"></i></a>
                    </td>
                </tr>
            <?php $idplantilla++;} ?>
            
        </tbody>

    </table>

    <br>
        <a name=""  style="float:right" href="agregarPlantilla.php" role="button">Agregar Plantilla</a>
    </div>

</div>
<?php mysqli_close($conexion); ?>
</body>
</html>