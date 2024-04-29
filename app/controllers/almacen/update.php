<?php

include ('../../config.php');

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$id_categoria = $_POST['id_categoria'];
$id_producto = $_POST['id_producto'];


$sentencia = $pdo->prepare("UPDATE tb_almacen
        SET codigo=:codigo,
            nombre=:nombre,
            descripcion=:descripcion,
            stock=:stock,
            stock_minimo=:stock_minimo,
            precio_compra=:precio_compra,
            precio_venta=:precio_venta,
            id_categoria=:id_categoria
        WHERE id_producto = :id_producto ");


$sentencia->bindParam('codigo', $codigo);
$sentencia->bindParam('nombre', $nombre);
$sentencia->bindParam('descripcion', $descripcion);
$sentencia->bindParam('stock', $stock);
$sentencia->bindParam('stock_minimo', $stock_minimo);
$sentencia->bindParam('precio_compra', $precio_compra);
$sentencia->bindParam('precio_venta', $precio_venta);
$sentencia->bindParam('id_categoria', $id_categoria);
$sentencia->bindParam('id_producto', $id_producto);


if($sentencia->execute()) {
    session_start();
    $_SESSION['msj'] = "Se actualizo el producto de la manera correcta";

    header('Location: '.$URL.'/almacen/');
    ?>
    <?php
}else{
    session_start();
    $_SESSION['msj'] = "Error no se pudo actualizar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/almacen/create.php');
}


