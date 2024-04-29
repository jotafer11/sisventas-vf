<?php

include('../../config.php');

$id_venta = $_POST['id_venta'];

$sentencia = $pdo->prepare("DELETE FROM tb_ventas where id_venta=:id_venta");

$sentencia->bindParam('id_venta', $id_venta);

if($sentencia->execute()){
    session_start();
    $_SESSION['msj'] = "Se elimino la venta de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/ventas/');
}else{
    session_start();
    $_SESSION['msj'] = "No se pudo eliminar de la BD";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/ventas/delete.php?id='.$id_venta);
}
