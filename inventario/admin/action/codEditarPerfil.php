<?php
    require_once "../../config/database.php";

    if($_POST['nombre-usuario'] != null && $_POST['apellido-usuario'] != null && $_POST['telefono-usuario'] != null && $_POST['pais-usuario'] != null && $_POST['email-usuario'] != null && $_POST['membresia-usuario'] != null || md5($_POST['contraseña-usuario'])==md5($_POST['confirmarcontraseña-usuario'])){
        if($_POST['nuevacontraseña-usuario'] == null ){
            $sql = "UPDATE usuarios SET nombre_usuario = '" . trim($_POST['nombre-usuario']) . "' ,apellido_usuario = '" . trim($_POST['apellido-usuario']) . "' ,telefono = '" . trim($_POST['telefono-usuario']) . "' ,pais = '" . trim($_POST['pais-usuario']) . "'  ,email = '" . trim($_POST['email-usuario']) . "' WHERE id_usuario = '" . $_POST['id'] . "'";
        }else{
            $sql = "UPDATE usuarios SET nombre_usuario = '" . trim($_POST['nombre-usuario']) . "' ,apellido_usuario = '" . trim($_POST['apellido-usuario']) . "' ,telefono = '" . trim($_POST['telefono-usuario']) . "' ,pais = '" . trim($_POST['pais-usuario']) . "'  ,email = '" . trim($_POST['email-usuario']) . "'  ,contraseña = '" . md5(trim($_POST['nuevacontraseña-usuario'])) . "' WHERE id_usuario = '" . $_POST['id'] . "'";
        }
            
        if($_FILES['imagen-usuario']['name'] == null ){
            $sql = "UPDATE usuarios SET nombre_usuario = '" . trim($_POST['nombre-usuario']) . "' ,apellido_usuario = '" . trim($_POST['apellido-usuario']) . "' ,telefono = '" . trim($_POST['telefono-usuario']) . "' ,pais = '" . trim($_POST['pais-usuario']) . "'  ,email = '" . trim($_POST['email-usuario']) . "' WHERE id_usuario = '" . $_POST['id'] . "'";
        }else{
            $sql = "UPDATE usuarios SET imagen_usuario = '" . trim($_FILES['imagen-usuario']['name']) . "' ,nombre_usuario = '" . trim($_POST['nombre-usuario']) . "' ,apellido_usuario = '" . trim($_POST['apellido-usuario']) . "' ,telefono = '" . trim($_POST['telefono-usuario']) . "' ,pais = '" . trim($_POST['pais-usuario']) . "'  ,email = '" . trim($_POST['email-usuario']) . "' WHERE id_usuario = '" . $_POST['id'] . "'";
        }

        if($conexion->query($sql)){
            echo "<script>alert('Proceso completado exitósamente')</script>";
            header("Refresh:0 , url =../perfil.php");
            exit();

        }
        else{
            echo "<script>alert('Inconvenientes para realizar el proceso')</script>";
            header("Refresh:0 , url =../perfil.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Por favor llenar todos los campos')</script>";
        header("Refresh:0 , url = ../perfil.php");
        exit();

    }
    mysqli_close($conexion);

?>