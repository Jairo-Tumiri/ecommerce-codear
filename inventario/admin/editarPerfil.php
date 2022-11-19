<?php
    include 'header.php';
    // include 'config.php';

    // $nombreUsuario=informacionUsuario('nombre_usuario')

?>

<div class="fixproduct">
    <br>
    <form id="perfil" method="POST" action="action/codEditarPerfil.php" enctype="multipart/form-data">
        <div class="datos-perfil">
            <div class="perfil-1">
                <label class="label-predeterminado" for="exampleInputEmail1">Imagen de Perfil</label>
                <br>
                <img class="imagen-predeterminado-perfil" src="<?php echo "../../img/usuarios/".$_GET['imagen-usuario']; ?>" alt="" >
                <br>
                <label class="label-predeterminado" for="exampleInputEmail">Inserte nueva foto</label>
                <br>
                <input type="file" class="input-predeterminado" name="imagen-usuario" value="<?php echo $_GET['imagen-usuario']; ?>" >
            </div>
            <div class="perfil-2">
                <div class="form-group">
                    <label class="label-predeterminado" for="exampleInputEmail1">Nombre usuario</label>
                    <br>
                    <input type="text" class="input-predeterminado" name="nombre-usuario" value="<?php echo $_GET['nombre-usuario']; ?>" required>
                </div>

                <div class="form-group">
                    <label class="label-predeterminado" for="exampleInputEmail1">Apellido usuario </label>
                    <br>
                    <input type="text" class="input-predeterminado" name="apellido-usuario" value="<?php echo $_GET['apellido-usuario']?>" required>
                </div>

                <div class="form-group">
                    <label class="label-predeterminado" for="exampleInputEmail1">Telefono Usuario</label>
                    <br>
                    <input type="text" class="input-predeterminado" name="telefono-usuario" value="<?php echo $_GET['telefono-usuario']; ?>" required>
                </div>

                <div class="form-group">
                    <label class="label-predeterminado" for="exampleInputEmail1">Pais</label>
                    <br>
                    <input type="text" class="input-predeterminado" name="pais-usuario" value="<?php echo $_GET['pais-usuario']?>" required>
                </div>

                <div class="form-group">
                    <label class="label-predeterminado" for="exampleInputEmail1">Email usuario</label>
                    <br>
                    <input type="text" class="input-predeterminado" name="email-usuario" value="<?php echo $_GET['email-usuario']?>" required>
                </div>

                <div class="form-group">
                    <label class="label-predeterminado" for="exampleInputPassword1">Membresia Usuario</label>
                    <br>
                    <input type="text" value="<?php echo $_GET['membresia-usuario'] ?>" class="input-predeterminado" name="membresia-usuario" readonly>
                    <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id" />
                </div>

                <div class="form-group" style="text-align: center;">
                <br><br>
                    <h2>¿Deseas cambiar tu contraseña?</h2>
                    <br>
                    <label class="label-predeterminado" for="exampleInputPassword1">Ingrese Contraseña Anterior</label>
                    <br>
                    <input type="hidden" value="<?php echo $_GET['contraseña-usuario'] ?>" class="input-predeterminado" name="contraseña-usuario">

                    <input type="password" name="nuevacontraseña-usuario" class="input-predeterminado" name="confirmarcontraseña-usuario" >
                    <br>
                    <label class="label-predeterminado" for="exampleInputPassword1">Nueva Contraseña</label>
                    <br>
                    <input type="password" value="" class="input-predeterminado" name="nuevacontraseña-usuario" >
                    <br>
                    <label class="label-predeterminado" for="exampleInputPassword1">Ingrese nuvamente nueva Contraseña</label>
                    <br>
                    <input type="password" value="" class="input-predeterminado" name="confirmarnuevacontraseña-usuario">
                </div>

            </div>
        </div>


        <br>
        <div class="opciones">
            <button type="submit" class="boton" style="float:right">Editar</button>
            <a name="" id="" class="boton" href="perfil.php" role="button" style="float:left">Volver</a>
        </div>
    </form>
</div>
<?php
mysqli_close($conexion);
?>
</body>
</html>