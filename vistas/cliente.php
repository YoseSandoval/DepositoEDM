<?php 
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{

require 'header.php';
if ($_SESSION['ventas']==1) {
 ?>
    <div class="all-content-wrapper">
      <!-- Main content -->
      <div class="header-advance-area">
          <!-- Default box -->
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
                                <i class="fa fa-tasks"></i>
                              </div>
                              <div class="breadcomb-ctn">
                                <h2>Clientes</h2>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-report">
                              <a href="../reportes/rptarticulos.php"><button data-toggle="tooltip" data-placement="left" title="Reporte" class="btn"><i class="icon nalika-download"></i></button></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="product-status mg-b-30">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="product-status-wrap">
                        <h4>Lista de clientes</h4>
                          <div class="add-product">
                            <div class="breadcomb-report">
                              <a target="_blank"><button data-toggle="tooltip" data-placement="left" title="" class="btn" onclick="mostrarform(true)" id="btnagregar">Agregar Cliente</button></a>
                              <br>
                            <div class="breadcomb-report">
                          </div>
                          <!--box-header-->
                          <!--centro-->
                          <div  id="listadoregistros">
                            <table id="tbllistado" >
                              <thead>
                                <th>Opciones</th>
                                <th>Nombre</th>
                                <th>Documento</th>
                                <th>Numero</th>
                                <th>Telefono</th>
                                <th>Email</th>
                              </thead>
                              <tbody>
                              </tbody>  
                            </table>
                          </div>
              
                          <div class="product-status mg-b-30" style="height: 400px;" id="formularioregistros">
                          <form action="" name="formulario" id="formulario" method="POST">
                            <div class="row">
                              <div class="review-content-section">
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                  <label for="">Nombre</label>
                                  <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                    <input class="form-control" type="hidden" name="idpersona" id="idpersona">
                                    <input class="form-control" type="hidden" name="tipo_persona" id="tipo_persona" value="Proveedor">
                                    <input class="form-control" type="text" name="nombre" id="nombre" maxlength="100" placeholder="Nombre del proveedor" required>
                                  </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                  <label for="">Tipo Dcumento</label>
                                  <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                    <select class="form-control select-picker" name="tipo_documento" id="tipo_documento" required>
                                      <option value="DPI">DPI</option>
                                      <option value="NIT">NIT</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                  <label for="">Número Documento</label>
                                  <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                    <input class="form-control" type="text" name="num_documento" id="num_documento" maxlength="20" placeholder="Número de Documento">
                                  </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                  <label for="">Direccion</label>
                                  <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <input class="form-control" type="text" name="direccion" id="direccion" maxlength="70" placeholder="Direccion">
                                  </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                  <label for="">Telefono</label>
                                  <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                    <input class="form-control" type="text" name="telefono" id="telefono" maxlength="20" placeholder="Número de Telefono">
                                  </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                  <label for="">Email</label>
                                  <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <input class="form-control" type="email" name="email" id="email" maxlength="50" placeholder="Email">
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
 <script src="scripts/cliente.js"></script>
 <?php 
}

ob_end_flush();
  ?>
