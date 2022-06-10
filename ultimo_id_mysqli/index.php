<?php

    require "conexion.php";

    $sql = "INSERT INTO alumnos VALUES(null, 'alumno1', '2019-11-30', '1')";

    if(mysqli_query($conexion, $sql)){
        echo "Registro insertado, el id insertado ha sido el " . mysqli_insert_id($conexion);
    }else{
        echo "No se inserto el registro correctamente.";
    }
?>