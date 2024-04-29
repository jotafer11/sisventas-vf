<?php

include ('../../config.php');

$nro_venta = $_GET['nro_venta'];
$id_cliente = $_GET['id_cliente'];
$total_pagado = $_GET['total_pagado'];

$sentencia = $pdo->prepare("INSERT INTO tb_ventas 
        (nro_venta, id_cliente, total_pagado, fyh_creacion)
VALUES (:nro_venta,:id_cliente,:total_pagado,:fyh_creacion)");

$sentencia->bindParam('nro_venta', $nro_venta);
$sentencia->bindParam('id_cliente', $id_cliente);
$sentencia->bindParam('total_pagado', $total_pagado);
$sentencia->bindParam('fyh_creacion', $fechaHora);


if($sentencia->execute()) {

    session_start();
    $_SESSION['msj'] = "Se registro la venta de la manera correcta";
    $_SESSION['icono'] = "success";
    ?>
    <script>
        location.href = "<?php echo $URL;?>/ventas/create.php";
    </script>
    <?php
}else{

    $pdo->rollBack();

    session_start();
    $_SESSION['msj'] = "error no se puede registrar en la bd";
    $_SESSION['icono'] = "error";
    ?>
    <script>
        location.href = "<?php echo $URL;?>/ventas/create.php";
    </script>
    <?php

}
