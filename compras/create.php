<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/almacen/listado_de_productos.php');
include('../app/controllers/proveedores/listado_de_proveedores.php');
include('../app/controllers/compras/listado_de_compras.php');

?>
<!-- Content Wrapper. Contains page content -->

<style type="text/css">

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
                    <h1>Registro de una nueva compra</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-9">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos con cuidado</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row mt-3">

                                <h4>Datos del producto</h4>
                                <button type="button" class="btn btn-primary ml-3" data-toggle="modal"
                                        data-target="#modal-buscar_producto">
                                    <i class="fa fa-search"></i> Buscar Producto
                                </button>


                                <div class="col-md-12 mt-3">
                                    <form action="../app/controllers/compras/create.php" method="post">

                                        <div class="row">

                                            <div class="col-md-4">
                                                <label>Codigo</label>
                                                <input id="sku" name="sku" type="text" class="form-control"
                                                       value="<?php echo $sku; ?>" disabled>
                                            </div>

                                            <div class="col-md-4">
                                                <label>Nombre del producto</label>
                                                <input id="nombre" name="nombre" type="text" class="form-control"
                                                       value="<?php echo $nombre; ?>" disabled>
                                            </div>

                                            <div class="col-md-4">
                                                <label>Stock</label>
                                                <input id="stock" name="stock" type="text" class="form-control" style="background-color: #ffec14"
                                                       value="<?php echo $stock; ?>" disabled>
                                            </div>


                                        </div>

                                        <div class="row mt-4">

                                            <div class="col-md-4">
                                                <input type="text" id="id_producto" value="<?php echo $id_producto; ?>" disabled hidden>

                                            </div>

                                            <div class="col-md-8">
                                                <label>Descripcion</label>
                                                <input id="descripcion" name="descripcion" type="text" class="form-control"
                                                       value="<?php echo $descripcion; ?>" disabled>
                                            </div>




                                        </div>


                                        <div class="row mt-4">

                                            <div class="col-md-4">

                                            </div>

                                            <div class="col-md-4">
                                                <label>Precio Compra</label>
                                                <input id="precio_compra" name="precio_compra" type="text" class="form-control"
                                                       value="<?php echo $precio_compra; ?>" disabled>
                                            </div>

                                            <div class="col-md-4">
                                                <label>Precio Venta</label>
                                                <input id="precio_venta" name="precio_venta" type="text" class="form-control"
                                                       value="<?php echo $precio_venta; ?>" disabled>
                                            </div>




                                        </div>



                                        <hr class="mt-5">

                                        <div class="row mt-5">

                                            <h4>Datos del proveedor</h4>
                                            <button type="button" class="btn btn-primary ml-3" data-toggle="modal"
                                                    data-target="#modal-proveedor">
                                                <i class="fa fa-search"></i> Buscar Proveedor
                                            </button> <br>

                                        </div>

                                        <hr class="mt-5">


                                        <div class="row mt-3">

                                            <div class="col">
                                                <input type="text" id="id_proveedor" hidden>
                                                <label>Nombre proveedor</label>
                                                <input id="nombre_proveedor" name="nombre_proveedor" type="text" class="form-control"
                                                       value="<?php echo $nombre_proveedor; ?>" disabled>
                                            </div>

                                            <div class="col">
                                                <label>Telefono</label>
                                                <input id="telefono" name="telefono" type="text" class="form-control" disabled>
                                            </div>

                                            <div class="col">
                                                <label>Email</label>
                                                <input id="email" name="email" type="text" class="form-control" disabled>
                                            </div>

                                        </div>


                                    </form>
                                </div>
                            </div>



                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->



                </div>

                <div class="col-md-3">

                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Detalle de la compra</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="col">
                                <?php
                                $contador_de_compras = 1;
                                foreach ($compras_datos as  $compras_dato) {
                                    $contador_de_compras = $contador_de_compras +1;
                                }
                                ?>

                                <input id="comprobante" type="text" value="Factura" class="form-control" hidden>


                                <label>Nro Compra</label>
                                <input id="nro_compra" type="text" value="<?php echo $contador_de_compras; ?>" style="text-align: center" class="form-control" disabled>
                            </div>

                            <div class="col mt-3">
                                <label>Fecha</label>
                                <input id="fecha_compra" name="fecha_compra" type="date" class="form-control">
                            </div>


                            <div class="row mt-4">

                                <div class="col-lg">
                                    <label>Precio Compra</label>
                                    <input id="precio_compra" name="precio_compra" type="number" class="form-control">
                                </div>

                            </div>


                            <div class="row mt-4">


                                <div class="col-lg">
                                    <label>Stock Actual</label>
                                    <input id="stock_actual" name="stock_actual" type="text" class="form-control"
                                           value="<?php echo $stock; ?>" disabled>
                                </div>

                                <div class="col-lg">
                                    <label>Stock Total</label>
                                    <input id="stock_total" type="number" class="form-control" style="text-align: center" disabled>
                                </div>

                            </div>


                            <div class="col mt-4">
                                <label>Cantidad de la compra</label>
                                <input id="cantidad_compra" type="number" class="form-control">
                                <script>
                                    $('#cantidad_compra').keyup(function () {

                                        var stock_actual = $('#stock_actual').val();
                                        var stock_compra = $('#cantidad_compra').val();

                                        var total = parseInt(stock_actual) + parseInt(stock_compra);
                                        $('#stock_total').val(total);

                                    });
                                </script>

                                <div class="mt-3">
                                    <hr>
                                    <button id="btn_guardar_compra" class="btn btn-primary btn-block">Guardar Compra</button>
                                </div>

                                <script>
                                    $('#btn_guardar_compra').click(function () {

                                        //var id_compra...
                                        var id_producto = $('#id_producto').val();
                                        var nro_compra = $('#nro_compra').val();
                                        var fecha_compra = $('#fecha_compra').val();
                                        var id_proveedor = $('#id_proveedor').val();
                                        var comprobante = $('#comprobante').val()
                                        var id_usuario = '<?php echo $id_usuario_sesion;?>';
                                        var precio_compra = $('#precio_compra').val();
                                        var cantidad_compra = $('#cantidad_compra').val();

                                        var stock_total = $('#stock_total').val();

                                        if(id_producto == "") {
                                            $('#id_producto').focus();
                                            alert("Debe llenar todos los campos");
                                        }else if(fecha_compra == "") {
                                            $('#fecha_compra').focus();
                                            alert("Debe llenar todos los campos");
                                        }else if(comprobante == "") {
                                            $('#comprobante').focus();
                                            alert("Debe llenar todos los campos");
                                        }else if(precio_compra == "") {
                                            $('#precio_compra').focus();
                                            alert("Debe llenar todos los campos");
                                        }else if(cantidad_compra == "") {
                                            $('#cantidad_compra').focus();
                                            alert("Debe llenar todos los campos");
                                        }
                                        else {
                                            var url = "../app/controllers/compras/create.php";
                                            $.get(url,{id_producto:id_producto,nro_compra:nro_compra,fecha_compra:fecha_compra,id_proveedor:id_proveedor,comprobante:comprobante,id_usuario:id_usuario,precio_compra:precio_compra,cantidad_compra:cantidad_compra,stock_total:stock_total},function (datos) {
                                                $('#respuesta_create').html(datos);
                                            });
                                        }

                                    });

                                </script>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div id="respuesta_create"></div>


                </div>

                <!-- row -->
            </div>



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-proveedor">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Busqueda de Proveedor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-hover table-striped table-sm">
                    <tr>
                        <th>Select</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Empresa</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                    <tbody>
                    <?php
                    foreach ($proveedores_datos as $proveedores_dato) {
                        $id_proveedor = $proveedores_dato['id_proveedor'];
                        $nombre_proveedor = $proveedores_dato['nombre_proveedor']; ?>
                        <tr>
                            <td>
                                <button class="btn btn-info" id="btn_seleccionar_proveedor<?php echo $id_proveedor;?>">
                                    Seleccionar
                                </button>
                                <script>
                                    $('#btn_seleccionar_proveedor<?php echo $id_proveedor;?>').click(function () {

                                        var id_proveedor = '<?php echo $id_proveedor;?>';
                                        $('#id_proveedor').val(id_proveedor);

                                        var nombre_proveedor = '<?php echo $nombre_proveedor;?>';
                                        $('#nombre_proveedor').val(nombre_proveedor);

                                        var telefono_proveedor = '<?php echo $proveedores_dato['telefono'];?>';
                                        $('#telefono').val(telefono_proveedor);

                                        var email_proveedor = '<?php echo $proveedores_dato['email'];?>';
                                        $('#email').val(email_proveedor);

                                    });
                                </script>
                            </td>
                            <td><?php echo $proveedores_dato['nombre_proveedor'];?></td>
                            <td><?php echo $proveedores_dato['telefono'];?></td>
                            <td><?php echo $proveedores_dato['empresa'];?></td>
                            <td><?php echo $proveedores_dato['email'];?></td>
                            <td><a href="#"> Editar</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>


            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<?php include('../layout/parte2.php'); ?>


<div class="modal fade" id="modal-buscar_producto">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Busqueda de producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">


                <table id="prods" class="table table-bordered table-striped">
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

                                        var id_producto = "<?php echo $productos_dato['id_producto'];?>";
                                        $('#id_producto').val(id_producto);

                                        var sku = "<?php echo $productos_dato['sku'];?>";
                                        $('#sku').val(sku);

                                        var nombre = "<?php echo $productos_dato['nombre'];?>";
                                        $('#nombre').val(nombre);

                                        var descripcion = "<?php echo $productos_dato['descripcion'];?>";
                                        $('#descripcion').val(descripcion);

                                        var stock = "<?php echo $productos_dato['stock'];?>";
                                        $('#stock').val(stock);

                                        var precio_compra = "<?php echo $productos_dato['precio_compra'];?>";
                                        $('#precio_compra').val(precio_compra);

                                        var precio_venta = "<?php echo $productos_dato['precio_venta'];?>";
                                        $('#precio_venta').val(precio_venta);

                                        var stock = "<?php echo $productos_dato['stock'];?>";
                                        $('#stock_actual').val(stock);

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
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <script>
        $(function () {

            $("#prods").DataTable({
                "responsive": true,"paging": true,"lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#prodss_wrapper .col-md-6:eq(0)');



        });
    </script>