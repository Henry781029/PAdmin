
<?php

    include("Bdatos.php");

    

    if(isset($_GET['id'])) {

        $id = $_GET['id'];
        $query = "SELECT * FROM propietarios WHERE id = $id";
        $resultadoeditar = mysqli_query($conexion, $query);

        if(mysqli_num_rows($resultadoeditar) == 1) {

            $row = mysqli_fetch_array($resultadoeditar);
            $nro_apto = $row['nro_apto'];
            $nombres = $row['nombres'];
            $apellidos = $row['apellidos'];
            $identificacion = $row['identificacion'];
            $v_admon = $row['v_admon'];
            $habitable = $row['habitable'];    
              
        }
    }

    if (isset($_POST['actualizar'])) {

        $id = $_GET['id'];
        $nro_apto = $_POST['nro_apto'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $identificacion = $_POST['identificacion'];
        $v_admon = $_POST['v_admon'];
        $habitable = $_POST['habitable'];

        $query = "UPDATE propietarios set nro_apto = '$nro_apto', nombres = '$nombres', apellidos = '$apellidos', identificacion = '$identificacion', v_admon = '$v_admon', habitable = '$habitable' WHERE id = $id";
        mysqli_query($conexion, $query);

        $_SESSION['message'] ='propietario actualizado correctamente';
        $_SESSION['message_type'] = 'primary';

        header("Location: propietarios.php");

    }

?>

<?php include("encabezados/heater.php") ?>

<h1>EDITAR</h1>

<div class="container p-4">
    <div class="row">
        <div class="col-md4">
            <div class="card card-body">
                <form action="editarpropietario.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nro_apto" value = "<?php echo $nro_apto?>" class = "form-control" placeholder = "Edite nro_apto">
                        <br>
                        <input type="text" name="nombres" value = "<?php echo $nombres?>" class = "form-control" placeholder = "Edite nombres">
                        <br>
                        <input type="text" name="apellidos" value = "<?php echo $apellidos?>" class = "form-control" placeholder = "Edite apellidos">
                        <br>
                        <input type="text" name="identificacion" value = "<?php echo $identificacion?>" class = "form-control" placeholder = "Edite identificacion">
                        <br>
                        <input type="text" name="v_admon" value = "<?php echo $v_admon?>" class = "form-control" placeholder = "Edite v_admon">
                        <br>
                        <input type="text" name="habitable" value = "<?php echo $habitable?>" class = "form-control" placeholder = "Edite habitable">
                    </div>
                    <br>
                    <button class= "btn btn-success" name="actualizar">Editar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("encabezados/footer.php") ?>
