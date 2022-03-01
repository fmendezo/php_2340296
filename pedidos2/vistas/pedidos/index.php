<?php

require_once("../../entidad/Pedido.php");
require_once("../../entidad/Cliente.php");

session_start();

if (!isset($_SESSION['pedidos'])) {
    $_SESSION['pedidos'] = array();
}

//$_SESSION['pedidos'][] = new Pedido($_SESSION['clientes'][0], date("Y-m-d H:i:s"));
//$_SESSION['productos'][] = new Producto("Gaseosa", 2500);


$pedidos = $_SESSION['pedidos'];


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
    <center><h1>Lista de Pedidos</h1></center>
    <br><br>
    <a class="btn btn-success" href="create.php">Agregar Pedido</a>
    <a class="btn btn-secondary float-end" href="../../index.php">Volver</a>
    <br><br>
    <?php
        if (count($pedidos)>0) {
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre del Cliente</th>
                        <th>Fecha</th>
                        <th>Forma de Pago</th>
                        <th>Total</th>
                        <th>Opciones</th>
                </thead>
                <tbody>
                    <?php
                    foreach($pedidos as $indice => $valor) {
                        echo "<tr>";
                        echo "<td>$indice</td>";
                        echo "<td>".$valor->cliente->nombre."</td>";
                        echo "<td>$valor->fecha</td>";
                        echo "<td>$valor->formaPago</td>";
                        echo "<td>$valor->total</td>";
                        echo "<td>";
                        echo "<a href='delete.php?id=$indice' class='btn btn-danger me-2'>Eliminar</a>";
                        echo "<a href='show.php?id=$indice' class='btn btn-primary'>Ver Pedido</a>";
                        echo "</td>";
                        echo "</tr>\n";
                    }
                    ?>
                </tbody>
            </table>
    <?php
        } else {
            echo "<h2>No existe Pedidos</h2>";
        }
    ?>
    </div>
    </div>
    </div>
</body>
</html>