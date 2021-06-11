<?php

session_start();


$conexion = mysqli_connect(
    'localhost',
    'root',
    '',
    'padmin'

);


if(isset($conexion)){

echo "base de daos c0nectada";

}


?>