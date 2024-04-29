<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/clientes/listado_de_clientes.php');
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
                            <h3 class="card-title">Clientes registrados </h3>

                            <div class="card-tools">
                                <a href="<?php echo $URL;?>/clientes/create.php" class="mr-4">Nuevo</a>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="table table-responsive">

                                <table id="clientes" class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>Nombre</th>
                                        <th>Rut</th>
                                        <th>Ciudad</th>
                                        <th>Celular</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    foreach ($clientes_datos as $clientes_dato) {
                                        $id_cliente = $clientes_dato['id_cliente'] ?>
                                        <tr>
                                            <td><center><?php echo $id_cliente; ?></center></td>
                                            <td><?php echo $clientes_dato['nombre_cliente']; ?></td>
                                            <td><?php echo $clientes_dato['rut_cliente']; ?></td>
                                            <td><?php echo $clientes_dato['ciudad_cliente']; ?></td>
                                            <td><?php echo $clientes_dato['telefono_movil']; ?></td>
                                            <td>
                                                <a href="show.php?id=<?php echo $id_cliente; ?>"> Ver /</a>
                                                <a href="update.php?id=<?php echo $id_cliente; ?>"> Editar /</a>
                                                <a href="delete.php?id=<?php echo $id_cliente; ?>"> Eliminar</a>
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

        $("#clientes").DataTable({
            "responsive": true,"paging": true,"lengthChange": false, "autoWidth": false,
            "order": [[0, 'desc']],
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#_wrapper .col-md-6:eq(0)');



    });
</script>