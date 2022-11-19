<?php
    require 'inventario/config/database.php';
        
    $sql_fetch_todos = "SELECT * FROM productos ORDER BY id_producto ASC";
    $query = mysqli_query($conexion, $sql_fetch_todos);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo/logoblaco.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js"></script>
    <title>Codear</title>
</head>

<body>

    
    <header class="contenedor-menu">
        <input type="checkbox" id="mobile-menu" />
        <div class="sidebar">
            <a class="logo1" href=""><img src="img/logo/logonegro.png" alt="">CODEAR</a>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="plantillas.php">Plantillas</a></li>
                <li><a href="membresia.php">Membresias</a></li>
                <li><a href="preguntas.php">Preguntas</a></li>
                <a class="boton" href="inventario/login.php">Iniciar Sesion</a>
            </ul>
        </div>
        <label for="mobile-menu" id="mmenu">
            <i class="fa fa-bars"></i>
            <i class="fa fa-times"></i>
        </label>
    </header>
    