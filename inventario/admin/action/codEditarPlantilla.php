<?php
    session_start();
    require_once "../../config/database.php";

    // if($_SESSION['username'] == null){
    // echo "<script>alert('Por favor registrarse o iniciar sesion.')</script>";
    // header("Refresh:0 , url = ../index.html");
    // exit();
    // }
    
    if($_POST['img-plantilla'] != null && $_POST['iframe-plantilla'] != null && $_POST['nom-plantilla'] != null && $_POST['cread-plantilla'] != null && $_POST['descripcion1-plantilla'] != null && $_POST['descripcion2-plantilla'] != null && $_POST['linkdescarga-plantilla'] != null && $_POST['precio-plantilla'] != null && $_POST['categ-plantilla'] != null && $_POST['memb-plantilla'] != null){
            $sql = "UPDATE productos SET imagen = '" . trim($_POST['img-plantilla']) . "' ,iframe = '" . trim($_POST['iframe-plantilla']) . "' ,nombre = '" . trim($_POST['nom-plantilla']) . "' ,creador = '" . trim($_POST['cread-plantilla']) . "' ,descripcion_uno = '" . trim($_POST['descripcion1-plantilla']) . "' ,descripcion_dos = '" . trim($_POST['descripcion2-plantilla']) . "' ,link_descarga = '" . trim($_POST['linkdescarga-plantilla']) . "' ,precio = '" . trim($_POST['precio-plantilla']) . "'  ,id_categoria = '" . trim($_POST['categ-plantilla']) . "'  ,id_membresia = '" . trim($_POST['memb-plantilla']) . "' WHERE id_producto = '" . $_POST['id'] . "'";

        if($conexion->query($sql)){
            echo "<script>alert('Proceso completado exitósamente')</script>";
            header("Refresh:0 , url =../plantillas.php");
            exit();

        }
        else{
            echo "<script>alert('Inconvenientes para realizar el proceso')</script>";
            header("Refresh:0 , url =../plantillas.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Por favor diligencia todos los campos')</script>";
        header("Refresh:0 , url = ../plantillas.php");
        exit();

    }
    mysqli_close($conexion);
?>
