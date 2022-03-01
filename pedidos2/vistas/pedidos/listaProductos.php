<?php

require_once("../../entidad/Producto.php");

session_start();


$id = $_GET['id'];

$productos = $_SESSION['productos'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action="addProductosPedido.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>" 7>
            <button class="btn btn-success" type="submit">Agregar</button>
            <button class="btn btn-secondary float-end" type="button" onclick="history.back();">Volver</button>
            <br>
<?php
        if (count($productos)>0) {
            ?>
            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th></th>
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
                        echo "<td><input type='checkbox' name='items[]' value='$indice' /></td>";
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
    </form>
    </div>
</body>
</html>