<?php

include('../../config.php');

$id_producto = $_POST['id_producto'];

$sentencia = $pdo->prepare("DELETE FROM tb_almacen where id_producto=:id_producto");

$sentencia->bindParam('id_producto', $id_producto);

if($sentencia->execute()){
    session_start();
    $_SESSION['msj'] = "Se elimino el producto de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/almacen/');
}else{
    session_start();
    $_SESSION['msj'] = "No se pudo eliminar de la BD";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/almacen/delete.php?id='.$id_producto);
}
