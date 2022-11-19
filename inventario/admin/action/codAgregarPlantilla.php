<?php
    session_start();
    require_once "../../config/database.php";
    // if($_SESSION['username'] == null){
    // echo "<script>alert('Por favor registrarse o iniciar sesion.')</script>";
    // header("Refresh:0 , url = ../index.html");
    // exit();

    // }

    if($_POST['img-plantilla'] != null  && $_POST['iframe-plantilla'] != null && $_POST['nom-plantilla'] != null && $_POST['cread-plantilla'] != null && $_POST['descripcion1-plantilla'] != null && $_POST['descripcion2-plantilla'] != null && $_POST['linkdescarga-plantilla'] != null && $_POST['precio-plantilla'] != null && $_POST['categ-plantilla'] != null && $_POST['memb-plantilla'] != null){
        $sql = "INSERT INTO productos (imagen,iframe,nombre,creador,descripcion_uno,descripcion_dos,link_descarga,precio,id_categoria,id_membresia) VALUES ('". trim($_POST['img-plantilla'])."','". trim($_POST['iframe-plantilla']). "','". trim($_POST['nom-plantilla']). "','". trim($_POST['cread-plantilla']). "','". trim($_POST['descripcion1-plantilla']). "','". trim($_POST['descripcion2-plantilla']). "','". trim($_POST['linkdescarga-plantilla']). "','". trim($_POST['precio-plantilla']). "','". trim($_POST['categ-plantilla']). "','". trim($_POST['memb-plantilla']). "')";
        if($conexion->query($sql)){
            echo "<script>alert('se agregó correctamente')</script>";
            header("Refresh:0 , url = ../plantillas.php");
            exit();

        }
        else{
            echo "<script>alert('No se pudo agregar')</script>";
            header("Refresh:0 , url = ../plantillas.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Por favor complete la información.')</script>";
        header("Refresh:0 , url = ../plantillas.php");
        exit();

    }
    mysqli_close($conexion);
?>