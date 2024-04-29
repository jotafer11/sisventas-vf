<?php


$sql_presupuestos = "SELECT *, cli.nombre_cliente as nombre_cliente 
                FROM tb_presupuestos as pre INNER JOIN tb_clientes as cli ON cli.id_cliente = pre.id_cliente
                ORDER BY id_presupuesto DESC";

$query_presupuestos = $pdo->prepare($sql_presupuestos);
$query_presupuestos->execute();
$presupuestos_datos = $query_presupuestos->fetchAll(PDO::FETCH_ASSOC);



