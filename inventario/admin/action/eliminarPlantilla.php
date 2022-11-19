<?php
    session_start();
    require_once "../../config/database.php";
    // if ($_SESSION['username'] == null){
    //     echo "<script>alert('Favor ingresar con tus credenciales')</script>";
    //     header("Refresh:0 , url = ../index.html");
    //     exit();

    // }
    $delete_num = $_GET['id'];
    $sql_delete =  "DELETE FROM productos WHERE id_producto = '$delete_num'";
    $query_delete = mysqli_query($conexion,$sql_delete);
    $datos = $sql_delete-->(PDO::FETCH_LAZY);
    if(!$datos){
        echo "<script>alert('No se pudo eliminar producto')</script>";        
        header("Refresh: 0 , url = ../plantillas.php");
        exit();

    }
    else{
        echo "<script>alert('Eliminación de Producto Exitosa')</script>";  
        header("Refresh: 0 , url = ../plantillas.php");
        exit();

    }
    mysqli_close($conexion);
?>