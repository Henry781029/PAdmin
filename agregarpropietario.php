
<?php

include ("Bdatos.php");

if (isset($_POST['agregarpropietario'])){

   $nro_apto = $_POST['nro_apto'];
   $nombres = $_POST['nombres'];
   $apellidos = $_POST['apellidos'];
   $identificacion = $_POST['identificacion'];
   $v_admon = $_POST['v_admon'];
   $habitable = $_POST['habitable'];

   $query = "INSERT INTO propietarios(nro_apto, nombres, apellidos, identificacion, v_admon, habitable) VALUES ('$nro_apto','$nombres', '$apellidos', '$identificacion', '$v_admon', '$habitable')";
   $resultado = mysqli_query($conexion, $query);
   
   if (!$resultado) {

        die("busqueda fallida");

    }
    
    $_SESSION['message'] = 'Propietario guardado correctamente';
    $_SESSION['message_type'] = 'success';


    header("Location:registro.php");

}
?>