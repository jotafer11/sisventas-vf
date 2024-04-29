<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/presupuestos/listado_de_presupuestos.php');
?>

<!-- Content Wrapper. Contains page content -->
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
                            <h3 class="card-title">Presupuestos registrados </h3>

                            <div class="card-tools">
                                <a href="<?php echo $URL;?>/presupuestos/create.php" class="mr-4">Nuevo</a>
                                <a href="<?php echo $URL;?>/#" class="mr-4">Version PDF</a>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <div class="table table-responsive">
                                <table id="presupuestos" class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th><center>Nro Presupuesto</center></th>
                                        <th><center>Productos</center></th>
                                        <th><center>Cliente</center></th>
                                        <th><center>Total presupuesto</center></th>
                                        <th><center>Fecha</center></th>
                                        <th><center>Acciones</center></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $contador = 0;
                                    foreach ($presupuestos_datos as $presupuestos_dato) {
                                        $id_presupuesto = $presupuestos_dato['id_presupuesto'];
                                        $contador = $contador + 1;
                                        ?>


                                        <tr>
                                            <td><center><?php echo $presupuestos_dato['nro_presupuesto']; ?></center></td>
                                            <td>
                                                <center>
                                                    <button class="btn btn-primary"
                                                            data-toggle="modal" data-target="#modal-productos<?php echo $id_presupuesto; ?>">
                                                        <i class="fa fa-shopping-basket"></i> Productos
                                                    </button>

                                                    <div class="modal fade" id="modal-productos<?php echo $id_presupuesto; ?>" tabindex="-1" role="dialog"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #08c2ec">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Productos de la venta <?php echo $id_presupuesto; ?></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="table table-responsive">
                                                                        <table class="table table-bordered table-sm table-hover table-striped">
                                                                            <thead>
                                                                            <tr>
                                                                                <th class="tbl_prods">Nro</th>
                                                                                <th class="tbl_prods">Codigo</th>
                                                                                <th class="tbl_prods">Producto</th>
                                                                                <th class="tbl_prods">Ctd</th>
                                                                                <th class="tbl_prods">Precio Unitario</th>
                                                                                <th class="tbl_prods">Precio SubTotal</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>


                                                                                <tr>
                                                                                    <td>
                                                                                        <center><?php echo $contador_de_carritopres; ?></center>
                                                                                        <input type="text" value="<?php echo $carritopres_dato['id_producto']; ?>" id="id_producto<?php echo $contador_de_carritopres; ?>"hidden>
                                                                                    </td>
                                                                                    <td><?php echo $carritopres_dato['sku']; ?></td>
                                                                                    <td><?php echo $carritopres_dato['nombre_producto']; ?></td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <span id="cantidad_carrito<?php echo $contador_de_carritopres; ?>"><?php echo $carritopres_dato['cantidad'] ?></span>

                                                                                            <input type="text" value="<?php echo $carritopres_dato['stock']?>"
                                                                                                   id="stock_de_inventario<?php echo $contador_de_carritopres; ?>" hidden>

                                                                                        </center>
                                                                                    </td>
                                                                                    <td><center><?php echo $carritopres_dato['precio_venta'] ?></center></td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <?php
                                                                                            $cantidad = floatval($carritopres_dato['cantidad']);
                                                                                            $precio_venta = floatval($carritopres_dato['precio_venta']);
                                                                                            echo $subtotal = $cantidad * $precio_venta;
                                                                                            $precio_total = $precio_total + $subtotal;
                                                                                            ?>
                                                                                        </center>
                                                                                    </td>

                                                                                </tr>

                                                                            <tr>
                                                                                <th class="tbl_prods_total_text" colspan="3">
                                                                                    <div class="float-right">Total</div>
                                                                                </th>

                                                                                <th class="tbl_prods_total">
                                                                                    <center><?php echo $cantidad_total; ?></center>
                                                                                </th>

                                                                                <th class="tbl_prods_total">
                                                                                    <center><?php echo $precio_unitario_total; ?></center>
                                                                                </th>

                                                                                <th style="background-color: #fff815" class="tbl_prods_total">
                                                                                    <center><?php echo $precio_total; ?></center>
                                                                                </th>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>



                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </center>
                                            </td>
                                            <td>
                                                <center><?php echo $presupuestos_dato['nombre_cliente']; ?></center>
                                            </td>
                                            <td>
                                                <center>$ <?php echo $presupuestos_dato['total_presupuesto']; ?></center>
                                            </td>

                                            <td>
                                                <center><?php echo $presupuestos_dato['fyh_creacion']; ?></center>
                                            </td>

                                            <td>
                                                <center>
                                                    <a href="show.php?id_presupuesto=<?php echo $id_presupuesto; ?>"> Ver /</a>
                                                    <a href="delete.php?id_presupuesto=<?php echo $id_presupuesto; ?>&nro_presupuesto=<?php echo $nro_presupuesto; ?>"> Eliminar / </a>
                                                    <a href="factura.php?id_presupuesto=<?php echo $id_presupuesto; ?>&nro_presupuesto=<?php echo $nro_presupuesto; ?>"> Factura </a>
                                                </center>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    </tbody>
                                </table>

                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include('../layout/parte2.php'); ?>



<script>
    $(function () {

        $("#presupuestos").DataTable({
            "responsive": true,"paging": true,"lengthChange": false, "autoWidth": false,
            "order": [[0, 'desc']],
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#prodss_wrapper .col-md-6:eq(0)');



    });
</script>