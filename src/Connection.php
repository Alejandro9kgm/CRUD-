<?php
namespace App;

final class Connection {
    public static function connect(){
    
        $conexion = mysqli_connect("127.0.0.1", "root", "", "Cartelera");
        if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if($conexion)
        {    
            return $conexion;
        }
        mysqli_close($conexion);
    }   
}
