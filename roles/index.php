<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include ('../app/controllers/roles/listado_de_roles.php');

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

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Roles registrados</h3>

                            <div class="card-tools">
                                <a href="http://localhost/sisventas/roles/create.php">Nuevo</a>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped table-sm">
                                <tr>
                                    <th>#</th>
                                    <th>Nombre Rol</th>
                                    <th>Acciones</th>
                                </tr>
                                <tbody>
                                <?php
                                foreach ($roles_datos as $roles_dato) { ?>
                                    <tr>
                                        <td><?php echo $roles_dato['id_rol'];?></td>
                                        <td><?php echo $roles_dato['rol'];?></td>
                                        <td>
                                            <a href="show.php?id=<?php echo $id_rol;?>">Ver</a> |
                                            <a href="update.php?id=<?php echo $id_rol;?>">Editar</a> |
                                            <a href="delete.php?id=<?php echo $id_rol;?>">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
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