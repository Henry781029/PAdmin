<?php include("encabezados/heater.php")?>
<br>
<br>
<h1>REGISTRAR PROPIETARIO</h1>    

<div class="container p-4">

    <div class="row">

        <div class="col-md-4 mx-auto">

                <div class="card card-body">
                    <form action="agregarpropietario.php" method = "POST">
                        <div class="form-group">
                            <input type="text" name = "nro_apto" class = "form-control" placeholder = "nro_apto" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name = "nombres" class = "form-control" placeholder = "nombres" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name = "apellidos" class = "form-control" placeholder = "apellidos">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name = "identificacion" class = "form-control" placeholder = "identificacion">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name = "v_admon" class = "form-control" placeholder = "v_admon">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name = "habitable" class = "form-control" placeholder = "habitable">
                        </div>
                        <br>
                        <input type="submit" class = "btn btn-warning btn-block" name = "agregarpropietario" value = "Guardar Propietario" >
                    </form>
                </div> 

                <?php if(isset($_SESSION['message'])) { ?>

                    <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                   
                    </button>
                    
                    </div>

                <?php  session_unset(); } ?>           

            
        </div>
</div>


<?php include("encabezados/footer.php")?>