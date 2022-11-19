<?php
    include '../identidad.php';
    switch ($tipoUsuario){
        case "2":
            include 'premium.php';
            $imagen = 'premium.png';
            $membresia = 'PREMIUM';
            break;
        case "3":
            include 'basico.php';
            $imagen = 'gratis.png';
            $membresia = 'GRATIS';
            break;
    }

?>
<h2 class="perfil-titulo" id="heading">PERFIL</h2>
<form id="perfil" action="editarPerfil.php" method="post">
    <div class="datos-perfil">
        <div class="perfil-1">
            <div class="perfil-imagen">
                <img class="imagen-predeterminado-perfil" src="../../img/usuarios/<?php echo $imagenUsuario?>" alt="">
                <img class="perfil-imagen-membresia" src="../../img/logo/<?php echo $imagen?>" alt="">
            </div>
        </div>
        <div class="perfil-2">
            <div class="perfil-text">
                <label class="label-predeterminado" for="exampleUsuario">Nombre</label><br>
                <input class="input-predeterminado" type="text" name="nombre-usuario" id="" value="<?php echo $nombreUsuario?>" readonly>
                <br>
                <label class="label-predeterminado" for="exampleUsuario">Apellido</label><br>
                <input class="input-predeterminado" type="text" name="apellido-usuario" id="" value="<?php echo $apellidoUsuario?>" readonly>
            </div>
            <div class="perfil-contacto">
                <label class="label-predeterminado" for="exampleUsuario">Telefono</label><br>
                <input class="input-predeterminado" type="text" name="telefono-usuario" value="<?php echo $telefonoUsuario?>" readonly>
                <br>
                <label class="label-predeterminado" for="exampleUsuario">Pais</label><br>
                <input class="input-predeterminado" type="text" name="pais-usuario" value="<?php echo $paisUsuario?>" readonly>
            </div>
            <div class="perfil-correo">
                <label class="label-predeterminado" for="exampleUsuario">Correo Electronico</label><br>
                <input class="input-predeterminado" type="text" name="email.usuario" value="<?php echo $emailUsuario?>" readonly>
                <br>
                <!-- <label class="label-predeterminado" type="hidden" for="exampleUsuario">contraseña</label><br> -->
                <input class="input-predeterminado" type="hidden" name="contraseña-usuario" value="<?php echo $contraseñaUsuario?>" readonly>
            </div>
        </div>
    </div>

    <div class="opciones">
        <div>
            <h3>¿Deseas cambiar su contraseña?</h3>
            <br>
            <a class="boton" href="editarPerfil.php?id=<?php echo $idUsuario?>&imagen-usuario=<?php echo $imagenUsuario ?>&nombre-usuario=<?php echo $nombreUsuario ?>&apellido-usuario=<?php echo $apellidoUsuario?>&telefono-usuario=<?php echo $telefonoUsuario ?>&pais-usuario=<?php echo $paisUsuario?>&email-usuario=<?php echo $emailUsuario ?>&contraseña-usuario=<?php echo $contraseñaUsuario?>&membresia-usuario=<?php echo $tipoUsuario?>" role="button">SI, SI DESEO CAMBIAR MI CONTRASEÑA</a>
            <!-- <input class="boton" type="submit" value="SI, SI DESEO CAMBIAR MI CONTRASEÑA"> -->
        </div>
        <div>
            <h3>¿Deseas cambiar tu informacion?</h3>
            <br>
            <a class="boton" href="editarPerfil.php?id=<?php echo $idUsuario?>&imagen-usuario=<?php echo $imagenUsuario ?>&nombre-usuario=<?php echo $nombreUsuario ?>&apellido-usuario=<?php echo $apellidoUsuario?>&telefono-usuario=<?php echo $telefonoUsuario ?>&pais-usuario=<?php echo $paisUsuario?>&email-usuario=<?php echo $emailUsuario ?>&contraseña-usuario=<?php echo $contraseñaUsuario?>&membresia-usuario=<?php echo $tipoUsuario?>" role="button">SI, SI DESEO CAMBIAR MI INFORMACION</a>
        </div>
    </div>

</form>

</div>
    <?php mysqli_close($conexion); ?>
</body>
</html>

