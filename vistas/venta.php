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
                              <i class="fa fa-tasks"></i>
                            </div>
                            <div class="breadcomb-ctn">
                              <h2>Ventas</h2>
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
                      <h4></h4><br><br>
                        <div class="add-product">
                          <div class="breadcomb-report">
                            <a target="_blank"><button data-toggle="tooltip" data-placement="left" title="" class="btn" onclick="mostrarform(true)" id="btnagregar">Nueva venta</button></a>
                            <br>
                           <div class="breadcomb-report">
                        </div>

                        <div id="listadoregistros">
                          <table id="tbllistado" >
                            <thead>
                              <th>Opciones</th>
                              <th>Fecha</th>
                              <th>Cliente</th>
                              <th>Usuario</th>
                              <th>Documento</th>
                              <th>Número</th>
                              <th>Total Venta</th>
                              <th>Estado</th>
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
                                  <label for="">Cliente(*):</label>
                                  <input class="form-control" type="hidden" name="idventa" id="idventa">
                                  <select name="idcliente" id="idcliente" class="form-control selectpicker" data-live-search="true" required></select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                  <label for="">Fecha(*): </label>
                                  <input class="form-control" type="date" name="fecha_hora" id="fecha_hora" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                  <label for="">Tipo Comprobante(*): </label>
                                  <select name="tipo_comprobante" id="tipo_comprobante" class="form-control selectpicker" required>
                                    <option value="Boleta">Boleta</option>
                                    <option value="Factura">Factura</option>
                                    <option value="Ticket">Ticket</option>
                                  </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                  <label for="">Serie: </label>
                                  <input class="form-control" type="text" name="serie_comprobante" id="serie_comprobante" maxlength="7" placeholder="Serie">
                                </div>
                                <div class="form-group col-lg-2 col-md-2 col-xs-6">
                                  <label for="">Número: </label>
                                  <input class="form-control" type="text" name="num_comprobante" id="num_comprobante" maxlength="10" placeholder="Número" required>
                                </div>
                                <div class="form-group col-lg-2 col-md-2 col-xs-6">
                                  <label for="">Impuesto: </label>
                                  <input class="form-control" type="text" name="impuesto" id="impuesto">
                                </div>
                                <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                  <a data-toggle="modal" href="#myModal">
                                    <button id="btnAgregarArt" type="button" class="btn btn-primary"><span class="fa fa-plus"></span>Agregar Articulos</button>
                                  </a>
                                </div>
                              <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                  <thead style="background-color:#A9D0F5">
                                    <th>Opciones</th>
                                    <th>Articulo</th>
                                    <th>Cantidad</th>
                                    <th>Precio Venta</th>
                                    <th>Descuento</th>
                                    <th>Subtotal</th>
                                  </thead>
                                  <tfoot>
                                    <th>TOTAL</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><h4 id="total">S/. 0.00</h4><input type="hidden" name="total_venta" id="total_venta"></th>
                                  </tfoot>
                                  <tbody>
                                  </tbody>
                                </table>
                              </div>
                              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
                                <button class="btn btn-danger" onclick="cancelarform()" type="button" id="btnCancelar"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
  </div>

    <!--Modal-->
    <div class="modal modal-adminpro-general FullColor-popup-DangerModal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width: 65% !important;">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-4">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Seleccione un producto</h4>
          </div>
          <div class="modal-body">
            <table id="tblarticulos">
              <thead>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Código</th>
                <th>Stock</th>
                <th>Precio Venta</th>
                <th>Imagen</th>
              </thead>
              <tbody>
                
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- fin Modal-->
<?php 
}else{
 require 'noacceso.php'; 
}

require 'footer.php';
 ?>
 <script src="scripts/venta.js"></script>
 <?php 
}

ob_end_flush();
  ?>

