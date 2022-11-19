<?php 
    require_once "../config/database.php";
    require_once "../identidad.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Codear</title>
    <link rel="shortcut icon" href="../../img/logo/logoblaco.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/41bcea2ae3.js"></script>
  </head>
  <body>
    
    <input type="checkbox" id="mobile-menu" />

    <div class="sidebar" id="sidebarBasico">
      <div class="logo">
        <a class="logo1" href=""><img src="../../img/logo/logoblaco.png" alt="">CODEAR</a>
        <!-- <h2>Codear</h2> -->
      </div>
      <div class="menu">
        <ul>
            <!-- <li><i class="fa fa-home"></i><a href="index.php">Inicio</a></li> -->
            <li><i class="fa fa-user"></i><a href="perfil.php">Perfil</a></li>
            <li><i class="fa-solid fa-file-word"></i><a href="plantillas.php">Plantillas</a></li>
            <li><i class="fa-solid fa-wallet"></i><a href="pagos.php">Pagos</a></li>
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
              <p>BIENVENIDO <?php echo $str = strtoupper($nombreUsuario) ?> A CODEAR</p>
          </div>
      </div>
      