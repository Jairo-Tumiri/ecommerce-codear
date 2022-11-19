<?php
    require_once '../config/database.php';

        function consulta($tabla){
            $consulta = "SELECT * FROM ".$tabla."";
            return $consulta;   
        }

        
    
?>