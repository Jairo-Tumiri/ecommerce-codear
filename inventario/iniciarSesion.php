<?php

    if(trim($_POST['email-usuario'])== null|| trim($_POST['contraseña-usuario']) == null){
        echo "<script>alert('Por favor completar los campos correspondientes')</script>";
        header("Refresh:0 , url =  ../index.php");
        exit();

    }
    else{
         require_once "config/database.php";
         $emailUsuario = mysqli_real_escape_string($conexion,$_POST['email-usuario']);
         $contraseñaUsuario = mysqli_real_escape_string($conexion,md5($_POST['contraseña-usuario']));

         $sql = "SELECT email,contraseña,tipo_usuario FROM usuarios WHERE email ='". $emailUsuario ."' and contraseña = '".$contraseñaUsuario."'";
         
         $query = mysqli_query($conexion,$sql);
         $verificacion = mysqli_fetch_array($query , MYSQLI_ASSOC);
         if(!$verificacion){
             echo "<script>alert('Usuario o Contraseña Inválida')</script>";
             header("Refresh:0 , url = cerrarSesion.php");
             exit();

         }
         else{
            switch($verificacion['tipo_usuario']){
                case "1":
                    session_start();
                    $_SESSION['email-usuario'] = $verificacion['email'];
                    header("Location: admin/index.php");
                    session_write_close();
                    break;
                case "2":
                    session_start();
                    $_SESSION['email-usuario'] = $verificacion['email'];
                    header("Location: usuario/plantillas.php");
                    session_write_close();
                    break;
                case "3":
                    session_start();
                    $_SESSION['email-usuario'] = $verificacion['email'];
                    header("Location: usuario/plantillas.php");
                    session_write_close();
                    break;
                default:
                     header("Location: ../index.php");
            }
         }
    }
    mysqli_close($conexion);

    //1 = admin
    //2 = premium
    //3 = basic
?>