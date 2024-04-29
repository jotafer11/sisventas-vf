<?php

//$sql_productos = "SELECT * FROM tb_almacen";
// CODIGO, NOMBRE, CATEGORIA, STOCK

//PRODUCTOS = ALMACEN

$sql_productos = "SELECT a.id as id, a.id_producto as id_producto, a.sku as sku, a.descripcion as descripcion, a.nombre as nombre, 
                    a.stock as stock, a.stock_minimo as stock_minimo, a.precio_compra as precio_compra, a.precio_venta as precio_venta, cat.nombre_categoria as categoria 
                    FROM tb_almacen as a INNER JOIN tb_categorias as cat ON a.id_categoria = cat.id_categoria";

$query_productos = $pdo->prepare($sql_productos);
$query_productos->execute();
$productos_datos = $query_productos->fetchAll(PDO::FETCH_ASSOC);