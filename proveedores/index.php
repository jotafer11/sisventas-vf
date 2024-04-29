<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include ('../app/controllers/proveedores/listado_de_proveedores.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
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
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Proveedores registrados</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default">
                                    Nuevo
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped table-sm">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Empresa</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                                <tbody>
                                <?php
                                foreach ($proveedores_datos as $proveedores_dato) { ?>
                                    <tr>
                                        <td><?php echo $proveedores_dato['nombre_proveedor'];?></td>
                                        <td><?php echo $proveedores_dato['telefono'];?></td>
                                        <td><?php echo $proveedores_dato['empresa'];?></td>
                                        <td><?php echo $proveedores_dato['email'];?></td>
                                        <td><a href="#"> Editar</a></td>
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

<!-- Modal para registrar categorías -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Creación de una nueva Categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nombre de la categoria</label>
                            <input type="text" id="nombre_categoria" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_create">Guardar Categoría</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    $('#btn_create').click(function () {
        //alert("guardar");
        var nombre_categoria = $('#nombre_categoria').val();
        var url = "../app/controllers/categorias/registro_de_categorias.php";

        $.get(url,{nombre_categoria:nombre_categoria},function (datos) {
            $('#respuesta').html(datos);
        });
    });
</script>
<div id="respuesta"></div>
