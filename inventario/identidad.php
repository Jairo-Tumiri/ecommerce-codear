<?php
    session_start();
     require_once "config/database.php";
    
    if ($_SESSION['email-usuario'] == null && $_SESSION['contraseña-usuario'] == null) {
        echo "<script>alert('Por favor registrarse o iniciar sesion.');</script>";
        header("Refresh:0 , url=../login.php");
        exit();
    }else{
        $sql_fetch_todos = "SELECT * FROM usuarios WHERE email='".$_SESSION['email-usuario']."'";
        $datosUsuario = mysqli_query($conexion, $sql_fetch_todos);
            if($usuario =  mysqli_fetch_array($datosUsuario)){
            $idUsuario = $usuario['id_usuario'];
            $imagenUsuario = $usuario['imagen_usuario'];
            $nombreUsuario = $usuario['nombre_usuario'];
            $apellidoUsuario = $usuario['apellido_usuario'];
            $telefonoUsuario = $usuario['telefono'];
            $paisUsuario = $usuario['pais'];
            $emailUsuario = $usuario['email'];
            $contraseñaUsuario = $usuario['contraseña'];
            $descargas = $usuario['descargas'];
            $tipoUsuario = $usuario['tipo_usuario'];
        }
    }

    switch ($tipoUsuario) {
        case '2':
            $selecionarPlantillasPremium = "SELECT * FROM productos ORDER BY id_producto ASC";
            $plantillas = mysqli_query($conexion, $selecionarPlantillasPremium);
            break;
        case '3':
            $selecionarPlantillasBasico = "SELECT * FROM productos WHERE id_membresia = '2' ORDER BY id_producto ASC";
            $plantillas = mysqli_query($conexion, $selecionarPlantillasBasico);
            break;  
    }

?>