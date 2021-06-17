<?php

include ("Bdatos.php");

if (isset($_POST['singup'])){

   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $query = "INSERT INTO registro(nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";
   $resultadousuario = mysqli_query($conexion, $query);
   
   if (!$resultadousuario) {

        die("registro fallida");

    }
    
    $_SESSION['message'] = 'Usuario guardado correctamente';
    $_SESSION['message_type'] = 'warning';


    header("Location:singup.php");

}
?>

<?php include("encabezados/heater_login.php")?>
<br>
<h1>RESGISTRAR USUARIO</h1>


<div class="container p-4">

    <div class="row">

        <div class="col-md-4 mx-auto">

            
                <?php if(isset($_SESSION['message'])) { ?>

                    <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                    
                    </div>

                <?php  session_unset(); } ?>  

                <div class="card card-body">
                    <form action="singup.php" method = "POST">
                        <div class="form-group">
                            <input type="text" name = "nombre" class = "form-control" placeholder = "nombre" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name = "apellido" class = "form-control" placeholder = "apellido" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name = "email" class = "form-control" placeholder = "email" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" name = "password" class = "form-control" placeholder = "password" autofocus>
                        </div>
                        <br>
                        <input type="submit" class = "btn btn-primary btn-block" name = "singup" value = "Registrar Usuario" >
                    </form>
               </div> 
            
        </div>
</div>

<?php include("encabezados/footer.php")?>