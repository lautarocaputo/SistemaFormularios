<?php 

    $host = "localhost";
    $User = "root";
    $pass = "";

    $db = "sistemaformularios";
    
    $conexion = mysqli_connect($host, $User, $pass, $db);

    if(!$conexion){
        echo "Conexion fallida";
    }

?>