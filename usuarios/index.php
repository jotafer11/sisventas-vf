<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include ('../app/controllers/usuarios/listado_de_usuarios.php');
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

                <div class="col-md-7">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Usuarios registrado</h3>

                            <div class="card-tools">
                                <a href="<?php echo $URL;?>/usuarios/create.php" class="mr-4">Nuevo</a>
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
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                                <tbody>
                                <?php
                                $contador = 0;
                                foreach ($usuarios_datos as $usuarios_dato) {
                                    $id_usuario = $usuarios_dato['id_usuario']; ?>
                                    <tr>
                                        <td><?php echo $usuarios_dato['id_usuario'];?></td>
                                        <td><?php echo $usuarios_dato['nombres'];?></td>
                                        <td><?php echo $usuarios_dato['email'];?></td>
                                        <td><?php echo $usuarios_dato['rol'];?></td>
                                        <td>
                                            <a href="show.php?id=<?php echo $id_usuario;?>">Ver</a> |
                                            <a href="update.php?id=<?php echo $id_usuario;?>">Editar</a> |
                                            <a href="delete.php?id=<?php echo $id_usuario;?>">Eliminar</a>
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
