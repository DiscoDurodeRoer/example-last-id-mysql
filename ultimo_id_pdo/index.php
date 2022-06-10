<?php

    require "conexion.php";

    $sql = "INSERT INTO alumnos VALUES(null, 'alumno1', '2019-11-30', '1')";
    
    if($conexion->query($sql)){
        echo "Registro insertado, el id insertado ha sido el " . $conexion->lastInsertId();
    }else{
        echo "No se inserto el registro correctamente.";
    }
?>