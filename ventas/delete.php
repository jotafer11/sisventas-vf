<?php
$id_venta_get = $_GET['id_venta'];
$nro_venta_get = $_GET['nro_venta'];

include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');
include('../app/controllers/ventas/cargar_venta.php');
include('../app/controllers/clientes/cargar_cliente.php');


?>

<!-- Content Wrapper. Contains page content -->

<style type="text/css">

    .tbl_prods {
        background-color: #e7e7e7;
        text-align: center;
    }

    .tbl_prods_total_text {
        background-color: #e7e7e7;
        text-align: right;
    }

    .tbl_prods_total {
        background-color: #e7e7e7;
        text-align: center;
    }

    #stock_actual {
        background-color: #ffec14;
        text-align: center;
    }

</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Detalle de la venta nro <?= $nro_venta; ?> ¿Está seguro de eliminar esta venta? </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">


                <div class="col-md-12">

                    <div class="card card-outline card-danger">

                        <div class="card-header">
                            <?php
                            $contador_de_ventas = 0;
                            foreach ($ventas_datos as $ventas_dato) {
                                $contador_de_ventas = $contador_de_ventas + 1;
                            }
                            ?>

                            <h4 class="card-title">
                                <i class="nav-icon fas fa-shopping-bag"></i> Venta Nro
                                <input type="text" class="text-center" value="<?= $nro_venta; ?>" disabled>
                            </h4>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- /.card-body -->
                            <b>Carrito</b>

                            <div class="table-responsive mt-4">
                                <table class="table table-bordered table-sm table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th class="tbl_prods">Nro</th>
                                        <th class="tbl_prods">Codigo</th>
                                        <th class="tbl_prods">Producto</th>
                                        <th class="tbl_prods">Cantidad</th>
                                        <th class="tbl_prods">Precio Unitario</th>
                                        <th class="tbl_prods">Precio SubTotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $contador_de_carrito = 0;
                                    $cantidad_total = 0;
                                    $precio_unitario_total = 0;
                                    $precio_total = 0;

                                    $sql_carrito = "SELECT *,pro.nombre as nombre_producto, pro.descripcion as descripcion, pro.precio_venta as precio_venta,
                                                    pro.stock as stock, pro.id_producto as id_producto
                                                    FROM tb_carrito AS carr INNER JOIN tb_almacen as pro 
                                                    ON carr.id_producto = pro.id_producto WHERE nro_venta = '$nro_venta' ORDER BY id_carrito ASC";
                                    $query_carrito = $pdo->prepare($sql_carrito);
                                    $query_carrito->execute();
                                    $carrito_datos = $query_carrito->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($carrito_datos as $carrito_dato) {
                                        $id_carrito = $carrito_dato['id_carrito'];
                                        $contador_de_carrito = $contador_de_carrito + 1;
                                        $cantidad_total = $cantidad_total + $carrito_dato['cantidad'];
                                        $precio_unitario_total = $precio_unitario_total + floatval($carrito_dato['precio_venta']);
                                        ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $contador_de_carrito; ?></center>
                                                <input type="text" value="<?php echo $carrito_dato['id_producto']; ?>" id="id_producto<?php echo $contador_de_carrito; ?>"hidden>
                                            </td>
                                            <td><?php echo $carrito_dato['codigo']; ?></td>
                                            <td><?php echo $carrito_dato['nombre_producto']; ?></td>
                                            <td>
                                                <center>
                                                    <span id="cantidad_carrito<?php echo $contador_de_carrito; ?>"><?php echo $carrito_dato['cantidad'] ?></span>

                                                    <input type="text" value="<?php echo $carrito_dato['stock']?>"
                                                           id="stock_de_inventario<?php echo $contador_de_carrito; ?>" hidden>

                                                </center>
                                            </td>
                                            <td><center><?php echo $carrito_dato['precio_venta'] ?></center></td>
                                            <td>
                                                <center>
                                                    <?php
                                                    $cantidad = floatval($carrito_dato['cantidad']);
                                                    $precio_venta = floatval($carrito_dato['precio_venta']);
                                                    echo $subtotal = $cantidad * $precio_venta;
                                                    $precio_total = $precio_total + $subtotal;
                                                    ?>
                                                </center>
                                            </td>


                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    <tr>
                                        <th class="tbl_prods_total_text" colspan="3">Total</th>

                                        <th class="tbl_prods_total">
                                            <?php echo $cantidad_total; ?>
                                        </th>

                                        <th class="tbl_prods_total">
                                            <?php echo $precio_unitario_total; ?>
                                        </th>

                                        <th style="background-color: #fff815" class="tbl_prods_total">
                                            <?php echo $precio_total; ?>
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>


                    </div>




                    <!-- row -->
                </div>

            </div>


            <div class="row">

                <div class="col-md-9">

                    <div class="card card-outline card-danger">

                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="nav-icon fas fa-user"></i>
                                Cliente
                            </h4>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>

                        <?php
                        foreach ($clientes_datos as $clientes_dato) {
                            $nombre_cliente = $clientes_dato['nombre_cliente'];
                            $rut_cliente = $clientes_dato['rut_cliente'];
                            $ciudad_cliente = $clientes_dato['ciudad_cliente'];
                            $telefono_movil = $clientes_dato['telefono_movil'];
                        }
                        ?>


                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- /.card-body -->
                            <div class="row mt-3">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" id="id_cliente" hidden>
                                        <label>Nombre / Razon Social</label>
                                        <input type="text" value="<?php echo $nombre_cliente; ?>"
                                               id="nombre_cliente" class="form-control" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Rut Empresa</label>
                                        <input type="text" value="<?php echo $rut_cliente; ?>"
                                               id="rut_cliente" class="form-control" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Ciudad </label>
                                        <input type="text" value="<?php echo $ciudad_cliente; ?>"
                                               id="ciudad_cliente" class="form-control" disabled>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Celular </label>
                                        <input type="text" value="<?php echo $telefono_movil; ?>"
                                               id="telefono_movil" class="form-control" disabled>
                                    </div>
                                </div>


                            </div>

                        </div>


                    </div>

                    <!-- row -->
                </div>

                <div class="col-md-3">
                    <div class="card card-outline card-danger">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-shopping-basket"></i> Registrar Venta</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <!-- /.card-tools -->

                        <div class="card-body">
                            <div class="form-group">
                                <label>Monto a cancelar</label>
                                <input type="text" class="form-control" id="total_pagado" style="text-align: center; background-color: #fff819"
                                       value="<?php echo $precio_total; ?>">
                            </div>
                            <hr>

                            <div class="form-group">
                                <button id="btn_borrar_venta"
                                    class="btn btn-danger btn-block">Borrar Venta</button>
                            </div>
                            <script>
                                $('#btn_borrar_venta').click(function () {

                                    var id_venta = '<?php echo $id_venta_get; ?>';
                                    var nro_venta = '<?php echo $nro_venta_get; ?>';

                                    actualizar_stock();
                                    borrar_venta();

                                    function actualizar_stock() {

                                        var i = 1;
                                        var n = '<?php echo $contador_de_carrito; ?>';

                                        for ( i = 1; i <= n ; i++) {
                                            var a = '#stock_de_inventario'+i;
                                            var stock_de_inventario = $(a).val();

                                            var b = '#cantidad_carrito'+i;
                                            var cantidad_carrito = $(b).html();

                                            var c = '#id_producto'+i;
                                            var id_producto = $(c).val();

                                            var stock_calculado = parseFloat(parseInt(stock_de_inventario) + parseInt(cantidad_carrito));
                                            //alert(id_producto+" - "+stock_de_inventario +" - "+cantidad_carrito+" - "+stock_calculado);

                                            var url2 = "../app/controllers/ventas/actualizar_stock.php";
                                            $.get(url2,{id_producto:id_producto,stock_calculado:stock_calculado},function (datos) {
                                                //$('#respuesta_registro_venta').html(datos);
                                            });
                                        }
                                    }

                                    function borrar_venta() {
                                        var url = "../app/controllers/ventas/borrar_venta.php";
                                        $.get(url,{id_venta:id_venta,nro_venta:nro_venta},function (datos) {
                                            $('#btn_borrar_venta').html(datos);
                                        });
                                    }

                                });
                            </script>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


</div><!-- /.container-fluid -->

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Busqueda del cliente</h4>
                <a href="<?php echo $URL;?>/clientes/create.php" target="_blank">
                    <button type="button" class="btn btn-primary ml-2">
                        <i class="fa fa-users"></i>
                        agregar nuevo cliente
                    </button>
                </a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="table table-responsive">

                    <table id="clientes" class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Seleccionar</th>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Celular</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $contador_de_clientes = 0;
                        foreach ($clientes_datos as $clientes_dato) {
                            $id_cliente = $clientes_dato['id_cliente'];
                            $contador_de_clientes = $contador_de_clientes + 1; ?>
                            <tr>
                                <td><center><?php echo $contador_de_clientes; ?></center></td>
                                <td>
                                    <center>
                                        <button id="btn_pasar_cliente<?php echo $id_cliente; ?>" class="btn btn-info">Seleccionar</button>
                                        <script>
                                            $('#btn_pasar_cliente<?php echo $id_cliente;?>').click(function () {

                                                var id_cliente = '<?php echo $clientes_dato['id_cliente']; ?>';
                                                $('#id_cliente').val(id_cliente);

                                                var nombre_cliente = '<?php echo $clientes_dato['nombre_cliente']; ?>';
                                                $('#nombre_cliente').val(nombre_cliente);

                                                var rut_cliente = '<?php echo $clientes_dato['rut_cliente']; ?>';
                                                $('#rut_cliente').val(rut_cliente);

                                                var telefono_movil = '<?php echo $clientes_dato['telefono_movil']; ?>';
                                                $('#telefono_movil').val(telefono_movil);

                                                $('#modal-lg').modal('toggle');
                                            });
                                        </script>
                                    </center>
                                </td>
                                <td><?php echo $clientes_dato['nombre_cliente']; ?></td>
                                <td><?php echo $clientes_dato['rut_cliente']; ?></td>
                                <td><?php echo $clientes_dato['telefono_movil']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                </div>


            </div>
        </div>

    </div>

</div>


<?php
include('../layout/parte2.php');
?>


<div class="modal fade" id="modal-buscar_producto">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Busqueda de producto</h4>
                <a href="http://localhost/sisventas/almacen/create.php" target="_blank">
                    <button type="button" class="btn btn-primary ml-2">
                        <i class="fa fa-box"></i> agregar nuevo producto
                    </button>
                </a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="table table-responsive">

                    <table id="prods" class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Seleccionar</th>
                            <th>Nombre</th>
                            <th>Stock</th>
                            <th>Precio Compra</th>
                            <th>Precio Venta</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($productos_datos as $productos_dato) {
                            $id_producto = $productos_dato['id_producto'] ?>
                            <tr>

                                <td><?php echo $productos_dato['codigo'];?></td>
                                <td>
                                    <button class="btn btn-info" id="btn_seleccionar<?php echo $id_producto;?>">
                                        Seleccionar
                                    </button>

                                    <script>
                                        $('#btn_seleccionar<?php echo $id_producto;?>').click(function () {

                                            var id_producto = "<?php echo $id_producto; ?>";
                                            $('#id_producto').val(id_producto);

                                            var producto = "<?php echo $productos_dato['nombre'];?>";
                                            $('#producto').val(producto);

                                            var descripcion = "<?php echo $productos_dato['descripcion'];?>";
                                            $('#descripcion').val(descripcion);

                                            var precio_venta = "<?php echo $productos_dato['precio_venta'];?>";
                                            $('#precio_venta').val(precio_venta);

                                            $('#cantidad').focus();


                                            //alert('<?php echo $id_producto; ?>');

                                        });

                                    </script>
                                </td>
                                <td><?php echo $productos_dato['nombre'];?></td>
                                <td><?php echo $productos_dato['stock'];?></td>
                                <td><?php echo $productos_dato['precio_compra'];?></td>
                                <td><?php echo $productos_dato['precio_venta'];?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                </div>


                <div class="row mt-3">

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" id="id_producto" hidden>
                            <label>Producto</label>
                            <input type="text" id="producto" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input type="text" id="descripcion" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Cantidad</label>
                            <input type="text" id="cantidad" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Precio Unitario</label>
                            <input type="text" id="precio_venta" class="form-control" disabled>
                        </div>
                    </div>

                </div>

                <button style="float: right" class="btn btn-primary" id="btn_registrar_carrito">Registrar</button>
                <div id="respuesta_carrito"></div>

                <script>
                    $('#btn_registrar_carrito').click(function () {
                        var nro_venta = '<?php echo $contador_de_ventas + 1; ?>';
                        var id_producto = $('#id_producto').val();
                        var cantidad = $('#cantidad').val();

                        if(id_producto=="") {
                            alert("debe llenar todos los campos...");
                        }else if(cantidad == "") {
                            alert("Debe llenar la cantidad del producto...")
                        }else{

                            //alert("listo para el controlador");
                            var url = "../app/controllers/ventas/registrar_carrito.php";
                            $.get(url,{nro_venta:nro_venta,id_producto:id_producto,cantidad:cantidad},function (datos) {
                                $('#respuesta_carrito').html(datos);
                            });
                        }
                    });
                </script>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->



    <script>
        $(function () {

            $("#prods").DataTable({
                "responsive": true,"paging": true,"lengthChange": false, "autoWidth": false,
                "pageLength": 7,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#prodss_wrapper .col-md-6:eq(0)');



        });

        $(function () {

            $("#clientes").DataTable({
                "responsive": true,"paging": true,"lengthChange": false, "autoWidth": false,
                "pageLength": 7,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#prodss_wrapper .col-md-6:eq(0)');



        });
    </script>