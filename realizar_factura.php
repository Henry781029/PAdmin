
<?php include("encabezados/heater_factura.php")?>


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

        header("Location: propietarios.php");
    }


$cliente = "Luis Cabrera Benito";
$remitente = "Edificio php";
$web = "https://localhost/PAdmin";
$mensajePie = "Gracias por su pronto pago";
$numero = 1;
$descuento = 0;
$porcentajeMora = 3;
$productos = [
    [
        "precio" => 150000,
        "descripcion" => "Pago cuota de Administracion ",
        "cantidad" => 1,
    ],
    [
        "precio" => 0,
        "descripcion" => "",
        "cantidad" => 0,
    ],
];
$fecha = date("Y-m-d");

?>

<div class="row">
    <div class="col-xs-10 ">
        <h1>Factura</h1>
    </div>
    <div class="col-xs-2">
        <img class="img img-responsive" src="#" alt="Logotipo">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-xs-10">
        <h1 class="h6"><?php echo $remitente ?></h1>
        <h1 class="h6"><?php echo $web ?></h1>
    </div>
    <div class="col-xs-2 text-center">
        <strong>Fecha</strong>
        <br>
        <?php echo $fecha ?>
        <br>
        <strong>Factura No.</strong>
        <br>
        <?php echo $numero ?>
    </div>
</div>

<div class="row text-center" style="margin-bottom: 2rem;">
    <div class="col-xs-6">
        <h1 class="h2">Propietario</h1>
        <strong><?php echo $cliente?></strong>
    </div>
    <div class="col-xs-6">
        <h1 class="h2">Remitente</h1>
        <strong><?php echo $remitente ?></strong>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <table class="table table-condensed table-bordered table-striped">
            <thead>
            <tr>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>costo admon</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $subtotal = 0;
            foreach ($productos as $producto) {
                $totalProducto = $producto["cantidad"] * $producto["precio"];
                $subtotal += $totalProducto;
                ?>
                <tr>
                    <td><?php echo $producto["descripcion"] ?></td>
                    <td><?php echo number_format($producto["cantidad"], 2) ?></td>
                    <td>$<?php echo number_format($producto["precio"], 2) ?></td>
                    <td>$<?php echo number_format($totalProducto, 2) ?></td>
                </tr>
            <?php }
            $subtotalConDescuento = $subtotal - $descuento;
            $impuestos = $subtotalConDescuento * ($porcentajeMora / 100);
            $total = $subtotalConDescuento + $impuestos;
            ?>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3" class="text-right">Subtotal</td>
                <td>$<?php echo number_format($subtotal, 2) ?></td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">Descuento</td>
                <td>$<?php echo number_format($descuento, 2) ?></td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">Subtotal con descuento</td>
                <td>$<?php echo number_format($subtotalConDescuento, 2) ?></td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">Morosidad</td>
                <td>$<?php echo number_format($impuestos, 2) ?></td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">
                    <h4>Total</h4></td>
                <td>
                    <h4>$<?php echo number_format($total, 2) ?></h4>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 text-center">
        <p class="h5"><?php echo $mensajePie ?></p>
    </div>
</div>

