<?php
    session_start();

    switch($_POST['membresia-usuario']){
        // case "ADMIN":
        //     $_POST['membresia-usuario'] = "1";
        //     break;
        case "PREMIUM":
            $_POST['membresia-usuario'] = "2";
            break;
        case "BASICO":
            $_POST['membresia-usuario'] = "3";
            break;
    }

    require_once "config/database.php";
    $nombreUsuario = mysqli_real_escape_string($conexion, $_POST['nombre-usuario']);
    $apellidoUsuario = mysqli_real_escape_string($conexion, $_POST['apellido-usuario']);
    $telefonoUsuario = mysqli_real_escape_string($conexion, $_POST['telefono-usuario']);
    $paisUsuario = mysqli_real_escape_string($conexion, $_POST['pais-usuario']);
    $emailUsuario = mysqli_real_escape_string($conexion, $_POST['email-usuario']);
    $contraseñaUsuario = mysqli_real_escape_string($conexion, md5($_POST['contraseña-usuario']));
    $membresiaUsuario = mysqli_real_escape_string($conexion, $_POST['membresia-usuario']);

    $sql = "SELECT nombre_usuario,email FROM usuarios WHERE nombre_usuario ='" . $nombreUsuario . "' and email = '".$emailUsuario."'" ;

    $query = mysqli_query($conexion, $sql);
    $verificacion = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if ($verificacion) {
        echo "<script>alert('Usuario actualmente está en uso')</script>";
        header("Refresh:0 , url = register.php");
        exit();
    }else{
    if ($_POST['nombre-usuario'] != null && $_POST['apellido-usuario'] != null && $_POST['email-usuario'] == $_POST['email-usu'] && $_POST['contraseña-usuario'] == $_POST['contraseña-usu'] && $_POST['pais-usuario'] != null && $_POST['telefono-usuario'] != null && $_POST['membresia-usuario'] != null) {

        $sql = "INSERT INTO usuarios (nombre_usuario,apellido_usuario,telefono,pais,email,contraseña,tipo_usuario) VALUES ('" . trim($_POST['nombre-usuario']) . "','" . trim($_POST['apellido-usuario']) . "','" . trim($_POST['telefono-usuario']) . "','" . trim($_POST['pais-usuario']) . "','" . trim($_POST['email-usuario']) . "','" . trim(md5($_POST['contraseña-usuario'])) . "','" . trim($_POST['membresia-usuario']) . "')";
        
        if ($conexion->query($sql)) {
            echo "<script>alert('Registro completado exitósamente')</script>";
            header("Refresh:0 , url = login.php");
            exit();
        } else {
            echo "<script>alert('Registro incompleto')</script>";
            header("Refresh:0 , url = register.php");
            exit();
        }
    } else {
        echo "<script>alert('Los campos de contraseña no coinciden')</script>";
        header("Refresh:0 , url = register.php");
        exit();
    }
        mysqli_close($conexion);
    }
?>