<?php
require_once("../../entidad/Pedido.php");
require_once("../../entidad/Producto.php");

session_start();

if (isset($_GET['id']) && isset($_GET['id_producto'])) {
    $id = $_GET['id'];
    $pedido = $_SESSION['pedidos'][$id];

    $producto = $pedido->productos[$_GET['id_producto']];

    //echo var_dump($pedido->productos[$_GET['id_producto']]);
    unset($pedido->productos[$_GET['id_producto']]);
    $pedido->total = $pedido->total - $producto->precio;
    header('Location: agregarProductos.php?id='.$id);
} else {
    echo "<script>alert('Acceso no valido');</script>";
    echo "<a href='index.php'>Volver al Inicio</a>";
}



?>