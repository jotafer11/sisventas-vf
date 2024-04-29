<?php

include ('../../config.php');


$nro_presupuesto = $_GET['nro_presupuesto'];
$id_producto = $_GET['id_producto'];
$cantidad = $_GET['cantidad'];

$sentencia = $pdo->prepare("INSERT INTO tb_carritopresupuesto 
        (nro_presupuesto, id_producto, cantidad, fyh_creacion)
VALUES (:nro_presupuesto,:id_producto,:cantidad,:fyh_creacion)");

$sentencia->bindParam('nro_presupuesto', $nro_presupuesto);
$sentencia->bindParam('id_producto', $id_producto);
$sentencia->bindParam('cantidad', $cantidad);
$sentencia->bindParam('fyh_creacion', $fechaHora);



if($sentencia->execute()) {
    ?>
    <script>
        location.href = "<?php echo $URL;?>/presupuestos/create.php";
    </script>
    <?php
}else{
    session_start();
    $_SESSION['mensaje'] = "error no se puede registrar en la bd";
    $_SESSION['icono'] = "error";
    ?>
    <script>
        location.href = "<?php echo $URL;?>/presupuestos/create.php";
    </script>
    <?php

}