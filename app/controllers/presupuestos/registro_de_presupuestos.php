<?php

include ('../../config.php');

$nro_presupuesto = $_GET['nro_presupuesto'];
$id_cliente = $_GET['id_cliente'];
$total_presupuesto = $_GET['total_presupuesto'];


$sentencia = $pdo->prepare("INSERT INTO tb_presupuestos 
        (nro_presupuesto, id_cliente, total_presupuesto, fyh_creacion)
VALUES (:nro_presupuesto,:id_cliente,:total_presupuesto,:fyh_creacion)");


$sentencia->bindParam('nro_presupuesto', $nro_presupuesto);
$sentencia->bindParam('id_cliente', $id_cliente);
$sentencia->bindParam('total_presupuesto', $total_presupuesto);
$sentencia->bindParam('fyh_creacion', $fechaHora);

if($sentencia->execute()) {

    session_start();
    $_SESSION['msj'] = "Se registro el presupuesto de la manera correcta";
    $_SESSION['icono'] = "success";
    ?>
    <script>
        location.href = "<?php echo $URL;?>/presupuestos/create.php";
    </script>
    <?php
}else{

    $pdo->rollBack();

    session_start();
    $_SESSION['msj'] = "error no se puede registrar en la bd";
    $_SESSION['icono'] = "error";
    ?>
    <script>
        location.href = "<?php echo $URL;?>/presupuestos/create.php";
    </script>
    <?php

}



