<?php
require_once("../../entidad/Pedido.php");
require_once("../../entidad/Cliente.php");
require_once("../../entidad/Producto.php");

session_start();

$id = $_GET['id'];

$pedido = $_SESSION['pedidos'][$id];
//echo var_dump($pedido);
$productos = $pedido->productos;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Detalles Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Ver Detalles Pedido</h1>
    <br><br>
    <?php
        echo "Cliente:<spam>".$pedido->cliente->nombre." ".$pedido->cliente->apellido."</spam><br>";
        echo "Fecha:<spam>$pedido->fecha</spam><br>";
        echo "Forma de Pago:<spam>$pedido->formaPago</spam><br>";
        echo "Total: $<spam>$pedido->total</spam><br>";
    ?>
    <br><br>

    <a class="btn btn-secondary float-end" href="index.php">Volver</a>
    <br><br>
    <?php
        if (count($productos)>0) {
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre del Producto</th>
                        <th>Precio del Producto</th>
                        <th>Descripción del Producto</th>
                        <th>Imagen</th>
                </thead>
                <tbody>
                    <?php
                    foreach($productos as $indice => $valor) {
                        echo "<tr>";
                        echo "<td>$indice</td>";
                        echo "<td>$valor->nombre</td>";
                        echo "<td>$valor->precio</td>";
                        echo "<td>$valor->descripcion</td>";
                        echo "<td><img src='$valor->foto' width='50' height='50'></td>";
                        echo "</tr>\n";
                    }
                    ?>
                </tbody>
            </table>
    <?php
        } else {
            echo "<h2>No existe Productos</h2>";
        }
    ?>
    </div>
</body>
</html>