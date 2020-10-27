<?php
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{


require 'header.php';

if ($_SESSION['almacen']==1) {
 ?>
    <div class="all-content-wrapper">
      <div class="header-advance-area">
        <div class="row">
          <div class="col-md-12">
            <div class="box"><br><br>
              <div class="breadcome-area">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="breadcome-list">
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-wp">
                              <div class="breadcomb-icon">
                                <i class="fa fa-file"></i>
                              </div>
                              <div class="breadcomb-ctn">
                                <h2>Categoria</h2>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
                                <!--box-header-->
                                <!--centro-->

            <div class="product-status mg-b-30">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                      <h4>Lista de categoria de produtos</h4>
                        <div class="add-product">
                          <div class="breadcomb-report">
                            <a target="_blank"><button data-toggle="tooltip" data-placement="left" title="" class="btn" onclick="mostrarform(true)" id="btnagregar">Agregar Categoria</button></a>
                            <br>
                           <div class="breadcomb-report">
                        </div>

                        <div id="listadoregistros">
                          <table id="tbllistado">
                            <thead>
                              <th>Opciones</th>
                              <th>Nombre</th>
                              <th>Descripcion</th>
                              <th>Estado</th>
                            </thead>
                            <tbody>
                            </tbody> 
                          </table>
                        </div>
                    


            <div class="product-status mg-b-30"  style="height: 400px;" id="formularioregistros">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap"> 
                        <form action="" name="formulario" id="formulario" method="POST">
                          <div class="row">
                            <div class="review-content-section">
                              <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="">Nombre</label>
                                <div class="input-group mg-b-pro-edt">
                                  <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                  <input class="form-control" type="hidden" name="idcategoria" id="idcategoria">
                                  <input class="form-control" type="text" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required>
                                </div>
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="">Descripcion</label>
                                <div class="input-group mg-b-pro-edt">
                                  <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                  <input class="form-control" type="text" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripcion">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row"> 
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="text-center custom-pro-edt-ds">
                                <button class="btn btn-ctl-bt waves-effect waves-light m-r-10" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
                                <button class="btn btn-ctl-bt waves-effect waves-light" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                              </div>
                            </div>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

              <!--fin centro-->
            </div>
          </div>
       </div>
                    <!-- /.box -->

      </div>
                  <!-- /.content -->
    </div>
<?php 
}else{
 require 'noacceso.php'; 
}

require 'footer.php';
 ?>
 <script src="scripts/categoria.js"></script>
 <?php 
}

ob_end_flush();
  ?>

