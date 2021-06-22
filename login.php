
<?php 

include "Bdatos.php";

if(!empty($_POST['email']) && !empty($_POST['password'])) {

    $query = $conexion->prepare('SELECT id, email, password FROM registro WHERE email=:email');
    $query->bindParam(':email', $_POST['email']);
    $query->execute();
    $resultadologin = $query->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if(count($resultadologin) > 0 && password_verify($_POST['password'], $resultadologin['password'])) {

        $_SESSION['registro_id'] = $resultadologin['id'];

        header('Location:login.php');

    } else{
        $message = 'los datos no coinciden';
    }
}

?>

<?php include("encabezados/heater_login.php")?>
<br>
<h1>INICIAR SECCION</h1>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4 mx-auto">

             <div class="card card-body">

                 <?php

                     if(!empty($message)):  ?>

                     <p><?=$message?></p>

                 <?php endif; ?>


                 <form action="login.php" method = "POST">

                    <div class="form-group">
                        <input type="text" name = "email" class = "form-control" placeholder = "email" autofocus>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" name = "password" class = "form-control" placeholder = "password" autofocus>
                    </div>
                    <br>
                    <input type="submit" class = "btn btn-primary btn-block" name = "login" value = "Iniciar seccion">

                 </form>

             </div> 
            
        </div>
</div>


<?php include("encabezados/footer.php")?>