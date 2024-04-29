<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/almacen/listado_de_productos.php');
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
                                <h3 class="card-title">Productos registrados </h3>

                                <div class="card-tools">
                                    <a href="<?php echo $URL;?>/almacen/create.php" class="mr-4">Nuevo</a>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">


                                <table id="prods" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Codigo TrucksRepair</th>
                                        <th>Codigo Referencia</th>
                                        <th>Nombre</th>
                                        <th>Categoria</th>
                                        <th>Stock</th>
                                        <th>Stock Min</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    foreach ($productos_datos as $productos_dato) {
                                        $id_producto = $productos_dato['id_producto'] ?>
                                        <tr>
                                            <td><?php echo $productos_dato['id'];?></td>
                                            <td><?php echo $productos_dato['sku'];?></td>
                                            <td><?php echo $productos_dato['nombre'];?></td>
                                            <td><?php echo $productos_dato['categoria'];?></td>
                                            <td><?php echo $productos_dato['stock'];?></td>
                                            <td><?php echo $productos_dato['stock_minimo'];?></td>
                                            <td>
                                                <a href="show.php?id=<?php echo $id_producto; ?>"> Ver /</a>
                                                <a href="update.php?id=<?php echo $id_producto; ?>"> Editar /</a>
                                                <a href="delete.php?id=<?php echo $id_producto; ?>"> Eliminar </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>


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

        $("#prods").DataTable({
            "responsive": true,"paging": true,"lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#prodss_wrapper .col-md-6:eq(0)');



    });
</script>
