<?php
    require_once "../../identidad.php";
    require_once "../../config/database.php";
 
    $delete_num = $_GET['id'];
    $sql_delete =  "DELETE FROM usuarios WHERE id_usuario = '$delete_num'";
    $query_delete = mysqli_query($conexion,$sql_delete);
    $datos = $sql_delete-->(PDO::FETCH_LAZY);
    if(!$datos){
        echo "<script>alert('No se pudo eliminar usuario')</script>";        
        header("Refresh: 0 , url = ../usuarios.php");
        exit();

    }
    else{
        echo "<script>alert('Eliminación de Producto Exitosa')</script>";  
        header("Refresh: 0 , url = ../usuarios.php");
        exit();

    }
    mysqli_close($conexion);
?>