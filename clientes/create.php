<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Crear nuevo cliente</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ingrese datos con cuidado</h3>

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
                                    <form action="../app/controllers/clientes/guardar_clientes.php" method="post">


                                        <div class="row mt-4">
                                            <div class="col-md-4">
                                                <label for="">Rut Empresa</label>
                                                <input id="rut_cliente" name="rut_cliente" type="text" class="form-control">
                                            </div>


                                            <div class="col-md-8">
                                                <label for="">Nombre / Razon Social</label>
                                                <input id="nombre_cliente" name="nombre_cliente" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-4">
                                            </div>

                                            <div class="col-md-8">
                                                <label for="">Celular</label>
                                                <input id="telefono_movil" name="telefono_movil" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mt-4">

                                            <div class="col-md-4">
                                            </div>



                                            <div class="col-md-8">
                                                <label for="">Ciudad</label>
                                                <input id="ciudad_cliente" name="ciudad_cliente" type="text" class="form-control">
                                            </div>


                                        </div>

                                        <div class="row mt-4">

                                            <div class="col-md-4">
                                            </div>



                                            <div class="col-md-8">
                                                <label for="">Direccion</label>
                                                <input id="direccion_cliente" name="direccion_cliente" type="text" class="form-control">
                                            </div>


                                        </div>

                                        <div class="row mt-4">

                                            <div class="col-md-4">
                                            </div>

                                            <div class="col-md-8">
                                                <label for="">Giro</label>
                                                <input id="giro_cliente" name="giro_cliente" type="text" class="form-control">
                                            </div>

                                        </div>


                                        <div class="text-center mt-5">

                                            <div class="form-group mt-5">
                                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-primary">Guardar Cliente</button>
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

            </div>



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/parte2.php'); ?>
