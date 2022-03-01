<?php

require_once("../../entidad/Pedido.php");
require_once("../../entidad/Producto.php");

session_start();


$id = $_POST['id'];

$pedido = $_SESSION['pedidos'][$id];

foreach ($_POST['items'] as $valor) {
    $producto = $_SESSION['productos'][$valor];
    $pedido->productos[]=$producto;
    $pedido->total=$pedido->total+$producto->precio;
}

header('Location: agregarProductos.php?id='.$id);

?>