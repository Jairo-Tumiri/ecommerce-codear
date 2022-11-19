<?php 
      require_once "../identidad.php";
      require_once "../config/database.php";
      include 'config.php';

      $countUsu = mysqli_num_rows($conexion->query(consulta("usuarios")));
      $countPlan = mysqli_num_rows($conexion->query(consulta("productos")));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Codear</title>
    <link rel="shortcut icon" href="../../img/logo/logoblaco.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/41bcea2ae3.js"></script>
  </head>
  <body>
    
    <input type="checkbox" id="mobile-menu" />

    <div class="sidebar">
      <div class="logo">
        <a class="logo1" href=""><img src="../../img/logo/logoblaco.png" alt="">CODEAR</a>
        <!-- <h2>Codear</h2> -->
      </div>
      <div class="menu">
        <ul>
            <li><i class="fa fa-home"></i><a href="index.php">Inicio</a></li>
            <li><i class="fa-solid fa-file-word"></i><a href="plantillas.php">Plantillas</a></li>
            <li><i class="fa-sharp fa-solid fa-users"></i><a href="usuarios.php">Usuarios</a></li>
            <li><i class="fa-solid fa-wallet"></i><a href="pagos.php">Pagos</a></li>
            <li><i class="fa fa-user"></i><a href="perfil.php">Perfil</a></li>
            <li><i class="fa fa-sign-out-alt"></i><a href="../cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </div>
    </div>

    <label for="mobile-menu" id="mmenu">
        <i class="fa fa-bars"></i>
        <i class="fa fa-times"></i>
    </label>

    <div class="content">
    
      <div class="top">
          <div class="search">
              <input type="text" placeholder="BUSCAR" />
              <i class="fa fa-search"></i>
          </div>
          <div>
              <p>BIENVENIDO <?php echo $str = strtoupper($nombreUsuario) ?> AL CENTRO DE CONTROL</p>
          </div>
      </div>
      
      <h2 id="heading">Control</h2>
      <div class="categories">
        <div class="category">
            <h3>USUARIOS</h3>
            <p>en la plataforma hay:</p>
            <h2><?php echo $countUsu?> usuarios registrados</h2>
            <img src="img/1.png" alt="" />
        </div>

        <div class="category">
            <h3>PLATILLAS</h3>
            <p>en la plataforma hay:</p>
            <h2><?php echo $countPlan?> plantillas disponibles</h2>
            <img src="img/2.png" alt="" />
        </div>

        <div class="category">
            <h3>PAGO</h3>
            <p>en la plataforma hay:</p>
            <h2>20 pagos realizados</h2>
            <img src="img/3.png" alt="" />
        </div>
      </div>