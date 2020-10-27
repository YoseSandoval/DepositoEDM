<?php

ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{

 
require 'header.php';

 ?>
  
  <div class="all-content-wrapper">
    <!-- Main content -->
    <div class="header-advance-area">
      <br><br>
      <div class="breadcome-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="breadcome-list">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="breadcomb-wp">
                      <div class="breadcomb-icon">
                        <i class="icon nalika-home"></i>
                      </div>
                      <div class="breadcomb-ctn">
                        <h2>Escritorio</h2>
                        <p>Bienvenido <span class="bread-ntd">Deposito El Divino Maestro</span></p>
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
      <div class="section-admin container-fluid">
        <div class="row admin text-center">
          <div class="col-md-12">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                    <h4 class="text-left text-uppercase"><b>Compras</b></h4>
                      <div class="row vertical-center-box vertical-center-box-tablet">
                        <div class="col-xs-9 cus-gh-hd-pro">
                          <h2 class="text-right no-margin">Q. 0.00 </h2>
                        </div>
                      </div>
                    <div class="pull-right m-t-10 text-success last-month-sc cl-one">
                      <a href="#" class="small-box-footer">Compras <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                    <h4 class="text-left text-uppercase"><b>Ventas</b></h4>
                      <div class="row vertical-center-box vertical-center-box-tablet">
                        <div class="col-xs-9 cus-gh-hd-pro">
                          <h2 class="text-right no-margin">Q. 0.00 </h2>
                        </div>
                      </div>
                    <div class="pull-right m-t-10 text-success last-month-sc cl-one">
                      <a href="#" class="small-box-footer">Ventas<i class="fa fa-arrow-circle-right"></i></a>
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
<?php 
require 'footer.php';
}

