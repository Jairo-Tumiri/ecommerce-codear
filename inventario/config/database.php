<?php

    // $hostname = "sql308.epizy.com";
    // $username = "epiz_32940536";
    // $password = "mgFl3Hm3ZMZpHO";
    // $database = "epiz_32940536_codeaR";

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "codear";

    $conexion = new mysqli($hostname , $username, $password, $database);

    mysqli_query($conexion , "SET character_set_result=utf8");

    if($conexion->connect_error){
        die("Database Error : " . $conexion->connect_error);
    }


?>
