<?php

include('../../config.php');

$id_cliente = $_POST['id_cliente'];

$sentencia = $pdo->prepare("DELETE FROM tb_clientes where id_cliente=:id_cliente");

$sentencia->bindParam('id_cliente', $id_cliente);

if($sentencia->execute()){
    session_start();
    $_SESSION['msj'] = "Se elimino el cliente de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/clientes/');
}else{
    session_start();
    $_SESSION['msj'] = "No se pudo eliminar de la BD";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/clientes/delete.php?id='.$id_cliente);
}
