<?php
include('app/config.php');
include('layout/sesion.php');

include('layout/parte1.php');


include('app/controllers/usuarios/listado_de_usuarios.php');

/*
include('app/controllers/categorias/listado_de_categorias.php');
include('app/controllers/almacen/listado_de_productos.php');
include('app/controllers/proveedores/listado_de_proveedores.php');
include('app/controllers/roles/listado_de_roles.php');
include('app/controllers/compras/listado_de_compras.php');

*/
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Bienvenido al Sistema de ventas - <?php echo $rol_sesion; ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            Contenido del sistema
            <br><br>

            <!-- Small Box (Stat card) -->
            <div class="row">

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                        <div class="inner">

                            <p>Usuarios Registrados</p>

                        </div>
                        <div class="icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <a href="<?php echo $URL;?>/usuarios" class="small-box-footer">
                            Mas detalle <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">

                            <p>Roles Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-address-card"></i>
                        </div>
                        <a href="<?php echo $URL;?>/roles" class="small-box-footer">
                            Mas detalle <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">


                            <p>Categorías Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <a href="<?php echo $URL;?>/categorias" class="small-box-footer">
                            Mas detalle <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->


                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner">


                            <p>Productos Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-list"></i>
                        </div>
                        <a href="<?php echo $URL;?>/almacen" class="small-box-footer">
                            Mas detalle <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->


                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-dark">
                        <div class="inner">


                            <p>Proveedores Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <a href="<?php echo $URL;?>/proveedores" class="small-box-footer">
                            Mas detalle <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">


                            <p>Compras Registradas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                        <a href="<?php echo $URL;?>/compras" class="small-box-footer">
                            Mas detalle <i class="fas fa-arrow-circle-right"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">

                            <p>Ventas Registradas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                        <a href="<?php echo $URL;?>/compras" class="small-box-footer">
                            Mas detalle <i class="fas fa-arrow-circle-right"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">


                            <p>Clientes Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                        <a href="<?php echo $URL;?>/compras" class="small-box-footer">
                            Mas detalle <i class="fas fa-arrow-circle-right"></i></a>
                    </div>

                </div>





            </div>
            <!-- /.row -->





        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include('layout/parte2.php'); ?>
