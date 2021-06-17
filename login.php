
<?php include("encabezados/heater_login.php")?>
<br>
<h1>INICIE SECCION</h1>

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
                    <form action="login.php" method = "POST">
                        <div class="form-group">
                            <input type="text" name = "usuario" class = "form-control" placeholder = "usuario" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" name = "password" class = "form-control" placeholder = "password" autofocus>
                        </div>
                        <br>
                        <input type="submit" class = "btn btn-primary btn-block" name = "login" value = "Iniciar seccion" >
                    </form>
               </div> 
               <div class="card card-body">
                    <form action="singup.php" method = "POST">
                        <p>En caso de NO iniciar seccion !REGISTRESE</p>
                        <input type="submit" class = "btn btn-warning btn-block" name = "singup" value = "Registrar Usuario" >
                    </form>
               </div> 
            
        </div>
</div>


<?php include("encabezados/footer.php")?>