<?php
include('../app/config.php');

include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/almacen/listado_de_productos.php');
include('../app/controllers/presupuestos/listado_de_presupuestos.php');
include('../app/controllers/clientes/listado_de_clientes.php');


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
                <div class="col-sm-6">
                    <?php
                    if(isset($_SESSION['msj'])){
                        $respuesta = $_SESSION['msj']; ?>
                        <script>
                            Swal.fire({
                                title: '<?php echo $respuesta; ?>',
                                icon: 'success',
                                timer: 2000,
                                buttons: false,
                            })
                        </script>
                        <?php
                        unset($_SESSION['msj']);
                    }
                    ?>
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

                    <div class="card card-outline card-primary">

                        <div class="card-header">
                            <?php
                            $contador_de_presupuestos = 0;
                            foreach ($presupuestos_datos as $presupuestos_dato) {
                                $contador_de_presupuestos = $contador_de_presupuestos + 1;
                            }
                            ?>

                            <h4 class="card-title">
                                <i class="nav-icon fas fa-shopping-bag"></i> Presupuesto Nro
                                <input type="text" class="text-center" value="<?php echo $contador_de_presupuestos + 1; ?>" disabled>
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

                            <button class="btn btn-primary ml-3" data-toggle="modal"
                                    data-target="#modal-buscar_producto">
                                <i class="fa fa-search"></i>
                                Buscar producto
                            </button>

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
                                        <th class="tbl_prods">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $contador_de_carritopresupuesto = 0;
                                    $cantidad_totalpresupuesto = 0;
                                    $precio_unitario_total = 0;
                                    $precio_totalpresupuesto = 0;

                                    $nro_presupuesto = $contador_de_presupuestos + 1;

                                    $sql_carritopresupuesto = "SELECT *,pro.nombre as nombre_producto, pro.descripcion as descripcion, pro.precio_venta as precio_venta,
                                                    pro.stock as stock, pro.id_producto as id_producto
                                                    FROM tb_carritopresupuesto AS carrp INNER JOIN tb_almacen as pro
                                                    ON carrp.id_producto = pro.id_producto WHERE nro_presupuesto = '$nro_presupuesto' ";

                                    $query_carritopresupuesto = $pdo->prepare($sql_carritopresupuesto);
                                    $query_carritopresupuesto->execute();
                                    $carritopresupuesto_datos = $query_carritopresupuesto->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($carritopresupuesto_datos as $carritopresupuesto_dato) {
                                    $id_carritopresupuesto = $carritopresupuesto_dato['id_carritopresupuesto'];
                                    $contador_de_carritopresupuesto = $contador_de_carritopresupuesto + 1;
                                    $cantidad_totalpresupuesto = $cantidad_totalpresupuesto + $carritopresupuesto_dato['cantidad'];
                                    $precio_unitario_total = $precio_unitario_total + floatval($carritopresupuesto_dato['precio_venta']);
                                        ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $contador_de_carritopresupuesto; ?></center>
                                                <input type="text" value="<?php echo $carritopresupuesto_dato['id_producto']; ?>" id="id_producto<?php echo $contador_de_carritopresupuesto; ?>"hidden>
                                            </td>
                                            <td><?php echo $carritopresupuesto_dato['sku']; ?></td>
                                            <td><?php echo $carritopresupuesto_dato['nombre_producto']; ?></td>
                                            <td>
                                                <center>
                                                    <span id="cantidad_carrito<?php echo $contador_de_carritopresupuesto; ?>"><?php echo $carritopresupuesto_dato['cantidad'] ?></span>

                                                    <input type="text" value="<?php echo $carritopresupuesto_dato['stock']?>"
                                                           id="stock_de_inventario<?php echo $contador_de_carritopresupuesto; ?>" hidden>

                                                </center>
                                            </td>
                                            <td><center><?php echo $carritopresupuesto_dato['precio_venta'] ?></center></td>
                                            <td>
                                                <center>
                                                    <?php
                                                    $cantidad = floatval($carritopresupuesto_dato['cantidad']);
                                                    $precio_venta = floatval($carritopresupuesto_dato['precio_venta']);
                                                    echo $subtotal = $cantidad * $precio_venta;
                                                    $precio_totalpresupuesto = $precio_totalpresupuesto + $subtotal;
                                                    ?>
                                                </center>
                                            </td>

                                            <td><center>
                                                    <form action="../app/controllers/presupuestos/borrar_carritopresupuesto.php" method="post">
                                                        <input type="text" name="id_carritopresupuesto" value="<?php echo $id_carritopresupuesto; ?>"hidden>
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i> Borrar
                                                        </button>
                                                    </form>
                                                </center>
                                            </td>

                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    </tbody>
                                    <tr>
                                        <th class="tbl_prods_total_text" colspan="3">Total</th>

                                        <th class="tbl_prods_total">
                                            <?php echo $cantidad_totalpresupuesto; ?>
                                        </th>

                                        <th class="tbl_prods_total">
                                            <?php echo $precio_unitario_total; ?>
                                        </th>

                                        <th style="background-color: #fff815" class="tbl_prods_total">
                                            <?php echo $precio_totalpresupuesto; ?>
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

                    <div class="card card-outline card-primary">

                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="nav-icon fas fa-user"></i>
                                Cliente
                            </h4>

                            <button class="btn btn-primary ml-3" data-toggle="modal"
                                    data-target="#modal-lg">
                                <i class="fa fa-search"></i>
                                Buscar cliente
                            </button>

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
                            <div class="row mt-3">

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" id="id_cliente" hidden>
                                        <label>Nombre Cliente</label>
                                        <input type="text" id="nombre_cliente" class="form-control" disabled>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Rut cliente</label>
                                        <input type="text" id="rut_cliente" class="form-control" disabled>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Celular </label>
                                        <input type="text" id="telefono_movil" class="form-control" disabled>
                                    </div>
                                </div>


                            </div>

                        </div>


                    </div>

                    <!-- row -->
                </div>

                <div class="col-md-3">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-shopping-basket"></i> Registrar Presupuesto</h3>

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
                                <input type="text" class="form-control" id="total_presupuesto" style="text-align: center; background-color: #fff819"
                                       value="<?php echo $precio_totalpresupuesto; ?>">
                            </div>
                            <hr>

                            <div class="form-group">
                                <button id="btn_guardar_presupuesto" class="btn btn-primary btn-block">Guardar Presupuesto</button>
                                <script>
                                    $('#btn_guardar_presupuesto').click(function () {
                                        var nro_presupuesto = '<?php echo $contador_de_presupuestos + 1; ?>';
                                        var id_cliente = $('#id_cliente').val();
                                        var total_presupuesto = $('#total_presupuesto').val();

                                        if(id_cliente=="") {
                                            alert("Debe llenar los datos del cliente");
                                        }else{
                                            guardar_presupuesto();
                                        }

                                        function guardar_presupuesto() {
                                            var url = "../app/controllers/presupuestos/registro_de_presupuestos.php";
                                            $.get(url,{nro_presupuesto:nro_presupuesto,id_cliente:id_cliente,total_presupuesto:total_presupuesto},function (datos) {
                                                $('#respuesta_registro_presupuesto').html(datos);
                                            });
                                        }
                                    });


                                </script>
                            </div>
                            <div id="respuesta_registro_presupuesto"></div>

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

                                <td><?php echo $productos_dato['sku'];?></td>
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

                <button style="float: right" class="btn btn-primary" id="btn_registrar_carritopresupuesto">Registrar</button>
                <div id="respuesta_carritopresupuesto"></div>

                <script>
                    $('#btn_registrar_carritopresupuesto').click(function () {
                        var nro_presupuesto = '<?php echo $contador_de_presupuestos + 1; ?>';
                        var id_producto = $('#id_producto').val();
                        var cantidad = $('#cantidad').val();

                        if(id_producto=="") {
                            alert("debe llenar todos los campos...");
                        }else if(cantidad == "") {
                            alert("Debe llenar la cantidad del producto...")
                        }else{

                            //alert("listo para el controlador");
                            var url = "../app/controllers/presupuestos/registrar_carritopresupuesto.php";
                            $.get(url,{nro_presupuesto:nro_presupuesto,id_producto:id_producto,cantidad:cantidad},function (datos) {
                                $('#respuesta_carritopresupuesto').html(datos);
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