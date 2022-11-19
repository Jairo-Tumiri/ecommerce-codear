<?php
    include '../config/database.php';
    include 'header.php';

    $sql_fetch_todos = "SELECT * FROM usuarios ORDER BY id_usuario ASC";
    $tablaUsuarios = mysqli_query($conexion, $sql_fetch_todos);
?>

        <div class="contenedor-usuario">
            <br>
            <br>
            <div class="title">
                <h2>Tabla de Usuario</h2>
            </div>
            <br>
            <table>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Email</th>
                    <th scope="col">Accion</th>
                </tr>
                <tbody>
                <?php $idusuario = 1;
                while ($datos = mysqli_fetch_array($tablaUsuarios)){ ?>
                    <tr>
                        <td><?php echo $idusuario?></td>
                        <td><?php echo $datos['id_usuario']?></td>
                        <td><?php echo $datos['nombre_usuario']?></td>
                        <td><?php echo $datos['apellido_usuario']?></td>
                        <td><?php echo $datos['telefono']?></td>
                        <td><?php echo $datos['pais']?></td>
                        <td><?php echo $datos['email']?></td>
                        <td>
                            <a name="id" href="action/eliminarUsuario.php?id=<?php echo $datos['id_usuario'] ?>" role="button"><i class="btn-eliminar fa-solid fa-square-minus"></i></a>
                        </td>
                    </tr>
                <?php $idusuario++;} ?>
                </tbody>
            </table>

        </div>

    </div>

    <?php mysqli_close($conexion); ?>
</body>
</html>
