<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/clientes/cargar_cliente.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Datos del cliente: <?php echo $nombre_cliente;?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-8">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Datos del cliente</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                        <div class="row mt-4">
                                            <div class="col-md-4">
                                                <label for="">Rut Empresa</label>
                                                <input value="<?php echo $rut_cliente; ?>" class="form-control" disabled>
                                            </div>


                                            <div class="col-md-8">
                                                <label for="">Nombre / Razon Social</label>
                                                <input value="<?php echo $nombre_cliente; ?>" class="form-control" disabled>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-4">
                                            </div>

                                            <div class="col-md-8">
                                                <label for="">Celular</label>
                                                <input value="<?php echo $telefono_movil; ?>" class="form-control" disabled>
                                            </div>
                                        </div>

                                        <div class="row mt-4">

                                            <div class="col-md-4">
                                            </div>



                                            <div class="col-md-8">
                                                <label for="">Ciudad</label>
                                                <input value="<?php echo $ciudad_cliente; ?>" class="form-control" disabled>
                                            </div>


                                        </div>

                                        <div class="row mt-4">

                                            <div class="col-md-4">
                                            </div>



                                            <div class="col-md-8">
                                                <label for="">Direccion</label>
                                                <input value="<?php echo $direccion_cliente; ?>" class="form-control" disabled>
                                            </div>


                                        </div>

                                        <div class="row mt-4">

                                            <div class="col-md-4">
                                            </div>

                                            <div class="col-md-8">
                                                <label for="">Giro</label>
                                                <input value="<?php echo $giro_cliente; ?>" class="form-control" disabled>
                                            </div>

                                        </div>


                                        <div class="text-center mt-5">

                                            <div class="form-group mt-5">
                                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            </div>

                                        </div>

                                </div>
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
