<?php
    include '../identidad.php';
    switch ($tipoUsuario){
        case "2":
            include 'premium.php';
            $membresia = 'PREMIUM';
            break;
        case "3":
            include 'basico.php';
            $membresia = 'BASICO';
            break;
    }
?>
        <div id="pagos">
            <a target="_blank"><?php echo $membresia?></a>
        </div>
    </div>
    <?php mysqli_close($conexion); ?>
</body>
</html>