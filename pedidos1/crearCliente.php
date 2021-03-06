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
    <div class="container mt-5">
<form method="post" action="guardarCliente.php">
        <input class="form-control" type="text" name="cliente" placeholder="Nombre del Cliente" /><br>
        <input class="form-control" type="text" name="apellido" placeholder="Apellido del Cliente" required /><br>
        <input class="form-control" type="number" name="edad" placeholder="Edad del Cliente" /><br>
        <button class="btn btn-success" type="submit">Crear Cliente</button>
        <a href="clientes.php"><button class="btn btn-primary float-end"  type="button">Volver</button></a>
    </form>
    </div>
    <br><br>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="funciones.js"></script>
</body>
</html>