<?php

require_once('../app/TCPDF-main/tcpdf.php');
include('../app/config.php');

$id_venta_get = $_GET['id_venta'];
$nro_venta_get = $_GET['nro_venta'];

$sql_ventas = "SELECT *, cli.nombre_cliente as nombre_cliente
                FROM tb_ventas as ve INNER JOIN tb_clientes as cli ON cli.id_cliente = ve.id_cliente where ve.id_venta = '$id_venta_get' ";

$query_ventas = $pdo->prepare($sql_ventas);
$query_ventas->execute();
$ventas_datos = $query_ventas->fetchAll(PDO::FETCH_ASSOC);

foreach ($ventas_datos as $ventas_dato) {


    $fyh_creacion = $ventas_dato['fyh_creacion'];
    $nro_venta = $ventas_dato['nro_venta'];
    $id_cliente = $ventas_dato['id_cliente'];
    $rut_cliente = $ventas_dato['rut_cliente'];
    $nombre_cliente = $ventas_dato['nombre_cliente'];

}

$fecha = date("d/m/Y", strtotime($fyh_creacion));

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, array(215,279), true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('TrucksRepair');
$pdf->setTitle('Factura de Venta');
$pdf->setSubject('Factura de Venta');
$pdf->setKeywords('Factura de Venta');

// set default header data
//$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(5, 5, 5);
//$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->setFont('dejavusans', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html ='
<style>
h1 {
    text-align: center;
    margin-top: 40px;
}

.tc {
    text-align: center;
}

</style>

<table border="0">

<tr>
<td><img src="../public/images/logotr-s.jpg"></td>
<td></td>
<td></td>
</tr>


<tr>
<td style="text-align: center"><b>SISTEMA VENTAS TRUCKSREPAIR</b></td>
<td></td>
<td style="font-size: 16px"><b>RUT: </b>77.131.991-2</td>
</tr>


<tr>
<td style="text-align: center">Av. Rio Viejo #1110</td>
<td></td>
<td style="font-size: 10px"><b>Nro Factura: </b>'.$id_venta_get.'</td>
</tr>
<tr>
<td style="text-align: center">+56 972628921</td>
<td></td>
<td style="font-size: 14px"><b>Nro de Autorización: </b> 100002000993</td>
</tr>
<tr>
<td style="text-align: center">CHILLÁN - CHILE</td>
<td></td>
<td></td>
</tr>
</table>
<br><br>



<h1>FACTURA</h1>

<div style="border: 1px solid #000000">
<table border="0" cellpadding="6px">
<tr>
    <td><b>Fecha: </b>'.$fecha.' </td>
    <td></td>
    <td><b>Rut:</b> '.$rut_cliente.' </td>
</tr>
<tr>
    <td colspan="3"><b>Señor(es):</b> '.$nombre_cliente.' </td>
    <td></td>
    <td><b></b></td>
</tr>
</table>
</div>

<br><br>
<table border="1" cellpadding="5">
<tr style="text-align: center;background-color: #c0c0c0">
    <th style="width: 40px">Nro</th>
    <th style="width: 100px">Codigo TrucksRepair</th>
    <th style="width: 300px">Nombre Producto</th>
    <th style="width: 70px">Ctd</th>
    <th style="width: 95px">Precio Unitario</th>
    <th style="width: 70px">Sub Total</th>
</tr>
';
$contador_de_carrito = 0;
$cantidad_total = 0;
$precio_unitario_total = 0;
$precio_total = 0;

$sql_carrito = "SELECT *,pro.nombre as nombre_producto, pro.id as id_producto, pro.descripcion as descripcion, pro.precio_venta as precio_venta,
pro.stock as stock, pro.id_producto as id_producto 
FROM tb_carrito AS carr INNER JOIN tb_almacen as pro 
ON carr.id_producto = pro.id_producto 
WHERE nro_venta = '$nro_venta_get' 

ORDER BY id_carrito ASC";

$query_carrito = $pdo->prepare($sql_carrito);
$query_carrito->execute();
$carrito_datos = $query_carrito->fetchAll(PDO::FETCH_ASSOC);
foreach ($carrito_datos as $carrito_dato) {
    $id_carrito = $carrito_dato['id_carrito'];
    $contador_de_carrito = $contador_de_carrito + 1;
    $cantidad_total = $cantidad_total + $carrito_dato['cantidad'];
    $precio_unitario_total = $precio_unitario_total + floatval($carrito_dato['precio_venta']);
    $subtotal = $carrito_dato['cantidad'] * $carrito_dato['precio_venta'];
    $precio_total = $precio_total + $subtotal;

    $html .='
    <tr>
        <td class="tc">'.$contador_de_carrito.'</td>
        <td class="tc">'.$carrito_dato['id'].'</td>
        <td class="tc">'.$carrito_dato['nombre_producto'].'</td>
        <td class="tc">'.$carrito_dato['cantidad'].'</td>
        <td class="tc">'.$carrito_dato['precio_venta'].'</td>
        <td class="tc">'.$subtotal.'</td>
    </tr>
    ';

}

$html .='

<p style="text-align: right">
    <b>Monto total</b> '.$precio_total.'
</p>


';

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
