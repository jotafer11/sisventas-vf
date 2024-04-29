<?php

include ('../../config.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$sku = $_POST['sku'];
$id_categoria = $_POST['id_categoria'];

$sentencia = $pdo->prepare("INSERT INTO tb_almacen 
        (id, nombre, descripcion, stock, stock_minimo, precio_compra, precio_venta, sku, id_categoria)
        VALUES (:id,:nombre,:descripcion,:stock,:stock_minimo,:precio_compra,:precio_venta,:sku,:id_categoria)");


$sentencia->bindParam('id', $id);
$sentencia->bindParam('nombre', $nombre);
$sentencia->bindParam('descripcion', $descripcion);
$sentencia->bindParam('stock', $stock);
$sentencia->bindParam('stock_minimo', $stock_minimo);
$sentencia->bindParam('precio_compra', $precio_compra);
$sentencia->bindParam('precio_venta', $precio_venta);
$sentencia->bindParam('sku', $sku);
$sentencia->bindParam('id_categoria', $id_categoria);


if($sentencia->execute()) {
    header('Location: '.$URL.'/almacen/');
    session_start();
    $_SESSION['msj'] = "Se registro el producto de la manera correcta";
    }else{
    session_start();
    $_SESSION['msj'] = "Error no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/almacen/create.php');
}



