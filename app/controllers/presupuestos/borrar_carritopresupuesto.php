<?php

include ('../../config.php');

$id_carritopresupuesto = $_POST['id_carritopresupuesto'];

$sentencia = $pdo->prepare("DELETE FROM tb_carritopresupuesto where id_carritopresupuesto=:id_carritopresupuesto");

$sentencia->bindParam('id_carritopresupuesto', $id_carritopresupuesto);



if($sentencia->execute()) {
    ?>
    <script>
        location.href = "<?php echo $URL;?>/presupuestos/create.php";
    </script>
    <?php
}else{
    ?>

    <?php
}
