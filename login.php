
<?php include("encabezados/heater_login.php")?>
<br>
<h1>INICIAR SECCION</h1>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4 mx-auto">

            <div class="card card-body">

                <form action="valida_login.php" method="POST">

                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="email" autofocus>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="password" autofocus>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary btn-block" name="login" value="Iniciar seccion">

                </form>

            </div>

        </div>
    </div>


    <?php include("encabezados/footer.php")?>