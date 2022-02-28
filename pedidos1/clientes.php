<?php

session_start();

if (!isset($_SESSION['clientes']) && !isset($_SESSION['apellidos']) && !isset($_SESSION['edades'])) {
    $_SESSION['clientes'] = array();
    $_SESSION['apellidos'] = array();
    $_SESSION['edades'] = array();
}

$clientes = $_SESSION['clientes'];
$apellidos = $_SESSION['apellidos'];
$edades = $_SESSION['edades'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <a href="index.php">Volver</a>
    <br>
    <center><h1>Gestión de Clientes</h1></center>

    <br><br>
    <a href="crearCliente.php">Crea Cliente</a><br><br>
    <?php
    if (count($clientes)>0) {
        echo "<table class='table table-striped' >\n";
        echo "<tr><th>Nombre del Cliente</th><th>Apellido del Cliente</th><th>Edad del Cliente</th><th>Opciones</th></tr>\n";
        foreach($clientes as $key => $cliente) {
            echo "<tr><td>$cliente</td>";
            echo "<td>".$apellidos[$key]."</td>";
            echo "<td>".$edades[$key]."</td>";
            echo "<td>";
            //echo "<form method='post' action='eliminarCliente.php?pos=$key'>";
            echo "<button class='btn btn-warning' type='button' onclick='editar($key)' > Editar </button>";
            echo "<button class='btn btn-danger' type='button' onclick='eliminar($key)' > Eliminar </button>";
            //echo "</form>";
            echo "</td></tr>\n";
        }
        echo "</table>";
        //echo "<script>alert('OK');</script>";
    } else {
        echo "<h2>No existen clientes registrados</h2>";
    }
    ?>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Esta seguro que desea eliminr al cliente?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <span id= 'deleteButton'></span>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="funciones.js"></script>
</body>
</html>