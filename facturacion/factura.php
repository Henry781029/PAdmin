<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <link rel="stylesheet" href="caratula.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4deb35a2e9.js" crossorigin="anonymous"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="">PAdmin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="facturacion/factura.php">Facturación</a>
                        </li>
                    </ul>
                      
                </div>
               
            </div>
    </nav>

<?php
$cliente = "Luis Cabrera Benito";
$remitente = "Luis Cabrera Benito";
$web = "https://parzibyte.me/blog";
$mensajePie = "Gracias por su compra";
$numero = 1;
$descuento = 0;
$porcentajeMora = 16;
$productos = [
    [
        "precio" => 50,
        "descripcion" => "Procesador AMD Ryzen 7",
        "cantidad" => 1,
    ],
    [
        "precio" => 800,
        "descripcion" => "Tarjeta de vídeo",
        "cantidad" => 2,
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
        <h1 class="h2">Cliente</h1>
        <strong><?php echo $cliente ?></strong>
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
                <th>Precio unitario</th>
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
                <td colspan="3" class="text-right">Impuestos</td>
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





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>