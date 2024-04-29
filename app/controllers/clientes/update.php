<?php

include ('../../config.php');

$nombre_cliente = $_POST['nombre_cliente'];
$rut_cliente = $_POST['rut_cliente'];
$ciudad_cliente = $_POST['ciudad_cliente'];
$direccion_cliente = $_POST['direccion_cliente'];
$giro_cliente = $_POST['giro_cliente'];
$telefono_movil = $_POST['telefono_movil'];
$id_cliente = $_POST['id_cliente'];


$sentencia = $pdo->prepare("UPDATE tb_clientes
        SET nombre_cliente=:nombre_cliente,
            rut_cliente=:rut_cliente,
            ciudad_cliente=:ciudad_cliente,
            direccion_cliente=:direccion_cliente,
            giro_cliente=:giro_cliente,
            telefono_movil=:telefono_movil
        WHERE id_cliente = :id_cliente ");


$sentencia->bindParam('nombre_cliente', $nombre_cliente);
$sentencia->bindParam('rut_cliente', $rut_cliente);
$sentencia->bindParam('ciudad_cliente', $ciudad_cliente);
$sentencia->bindParam('direccion_cliente', $direccion_cliente);
$sentencia->bindParam('giro_cliente', $giro_cliente);
$sentencia->bindParam('telefono_movil', $telefono_movil);
$sentencia->bindParam('id_cliente', $id_cliente);


if($sentencia->execute()) {
    session_start();
    $_SESSION['msj'] = "Se actualizo el cliente de la manera correcta";
    header('Location: '.$URL.'/clientes/');
    ?>
    <?php
}else{
    session_start();
    $_SESSION['msj'] = "Error no se pudo actualizar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/clientes/');
}