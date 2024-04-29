<?php

//COMPRA QUIERO TRAER DATOS DE PRODUCTO

$sql_compras = "SELECT *,
                pro.sku as sku, pro.nombre as nombre_producto, pro.stock as stock, pro.precio_venta as precio_venta, pro.precio_compra as precio_compra
                FROM tb_compras as co INNER JOIN tb_almacen as pro
                ON co.id_producto = pro.id_producto";


/* $sql_compras = "SELECT * FROM tb_compras"; */


$query_compras = $pdo->prepare($sql_compras);
$query_compras->execute();
$compras_datos = $query_compras->fetchAll(PDO::FETCH_ASSOC);