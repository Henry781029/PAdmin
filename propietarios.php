
<?php include("Bdatos.php")?>
<?php include("encabezados/heater.php")?>
<br>
<br>
<h1>PROPIETARIOS</h1>

<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nro_Apto</th>    
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Identificacion</th>
                        <th scope="col">V_Administracion</th>
                        <th scope="col">Habitable</th>
                        <th scope="col">Created</th>
                        <th scope="col">Acciones</th>
                        
                    </tr>

                </thead>
                <tbody>

                    <?php
                    
                        $query = "SELECT * FROM propietarios";
                        $resultadopropietarios= mysqli_query($conexion, $query);

                        while($row = mysqli_fetch_array($resultadopropietarios)) { 
                            
                    ?>
                        <tr>
                            
                            <td><?php echo $row['nro_apto']?></td>
                            <td><?php echo $row['nombres']?></td>
                            <td><?php echo $row['apellidos']?></td>
                            <td><?php echo $row['identificacion']?></td>
                            <td><?php echo $row['v_admon']?></td>
                            <td><?php echo $row['habitable']?></td>
                            <td><?php echo $row['created']?></td>
                            <td>

                                <a href="editarpropietario.php?id=<?php echo $row['id']?>" class= "btn btn-success">
                                <i class="fas fa-marker"></i>
                                </a>
                                <a href="borrarpropietario.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                                </a>
                            
                            </td>
                        
                        </tr>


                    <?php }  ?>

                </tbody>
            
            </table>
        
        </div>

    </div>

</div>    

<?php include("encabezados/footer.php")?>