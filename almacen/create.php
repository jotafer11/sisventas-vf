<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/categorias/listado_de_categorias.php');
include('../app/controllers/almacen/listado_de_productos.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Crear nuevo producto</h1>
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
                    <div class="card card-primary">
                        <div class="card-header">

                            <?php
                            $contador_de_productos = 0;
                            foreach ($productos_datos as $productos_dato) {
                                $contador_de_productos = $contador_de_productos + 1;
                            }
                            ?>

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
                                    <form action="../app/controllers/almacen/create.php" method="post">

                                        <div class="row">

                                            <div class="col-md-4">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="">Categoria</label>
                                                <select name="id_categoria" id="id_categoria" class="form-control">

                                                    <?php
                                                    foreach ($categorias_datos as $categorias_dato) { ?>
                                                        <option value="<?php echo $categorias_dato['id_categoria']; ?>">
                                                            <?php echo $categorias_dato['nombre_categoria'] ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                    
                                                </select>

                                            </div>

                                            <div class="col-md-4">
                                                <label for="">Codigo TrucksRepair</label>
                                                <span id="selected"></span>(CAT) + 00<?php echo $contador_de_productos + 1; ?>

                                                <select id="option2" class="form-control">
                                                    <option value="">Seleccione categoria</option>
                                                    <option value="CARROC">CARROC</option>
                                                    <option value="DIREC">DIREC</option>
                                                    <option value="ELEC">ELEC</option>
                                                    <option value="FIL">FIL</option>
                                                    <option value="FRE">FRE</option>
                                                    <option value="MOT">MOT</option>
                                                    <option value="SUSP">SUSP</option>
                                                    <option value="TRANS">TRANS</option>
                                                    <option value="SISESC">SISESC</option>
                                                    <option value="REFROG">REFRIG</option>
                                                </select>
                                                <input id="id" name="id" type="text" class="form-control"
                                                       value="00<?php echo $contador_de_productos + 1; ?>">

                                            </div>
                                            <script>
                                                option2 = document.getElementById("option2");
                                                id = document.getElementById("id");

                                                option2.onchange = function(){
                                                    var text = option2.options[option2.selectedIndex].value
                                                    if(text != ""){
                                                        id.value += text;
                                                    }
                                                }

                                            </script>

                                        </div>

                                        <div class="row-mt-5">

                                            <div class="col-md-4">
                                            </div>
                                            <div class="col-md-4">
                                            </div>

                                        </div>



                                        <div class="row mt-4">


                                            <div class="col-md-4">


                                            </div>

                                            <div class="col-md-8">
                                                <label for="">Nombre Producto</label>
                                                <input id="nombre" name="nombre" type="text" class="form-control">
                                            </div>


                                        </div>


                                        <div class="row mt-4">

                                            <div class="col-md-4">
                                                <label for="">Codigo Referencia</label>
                                                <input id="sku" name="sku" type="text" class="form-control">

                                            </div>

                                            <div class="col">
                                                <label for="">Stock</label>
                                                <input id="stock" name="stock" type="number" class="form-control">
                                            </div>

                                            <div class="col">
                                                <label for="">Stock Minimo</label>
                                                <input id="stock_minimo" name="stock_minimo" type="number" class="form-control">
                                            </div>

                                            <div class="col">
                                                <label for="">Precio Compra</label>
                                                <input id="precio_compra" name="precio_compra" type="number" class="form-control">

                                            </div>

                                            <div class="col">
                                                <label for="">Precio Venta</label>
                                                <input id="precio_venta" name="precio_venta" type="number" class="form-control">

                                            </div>


                                        </div>

                                        <div class="col-md-4">
                                        </div>

                                        <div class="text-center mt-5">

                                            <div class="form-group mt-5">
                                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-primary">Guardar Producto</button>
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
