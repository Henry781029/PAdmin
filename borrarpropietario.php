<?php

    include("Bdatos.php");

    if(isset($_GET['id'])) {

        $id = $_GET['id'];
        $query = "DELETE FROM propietarios WHERE id = $id";
        $resultadoborrar = mysqli_query($conexion, $query);

        if(!$resultadoborrar) {

            die("terminar busquedad");

        }


        $_SESSION['message'] = 'propietario borrado con exito';
        $_SESSION['message-type'] = 'danger';

        header("Location: propietarios.php");

    }



?>