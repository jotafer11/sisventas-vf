<?php

$sql_clientes = "SELECT id_cliente as id_cliente, nombre_cliente as nombre_cliente, rut_cliente as rut_cliente,
                    ciudad_cliente as ciudad_cliente, direccion_cliente as direccion_cliente, giro_cliente as giro_cliente, telefono_movil as telefono_movil
                FROM tb_clientes";


$query_clientes = $pdo->prepare($sql_clientes);
$query_clientes->execute();
$clientes_datos = $query_clientes->fetchAll(PDO::FETCH_ASSOC);


