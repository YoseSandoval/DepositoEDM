 
 <!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Deposito El Divino Maestro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Tell the browser to be responsive to screen width -->

      <!-- Google Fonts
      ============================================ -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">


<!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/owl.carousel.css">
    <link rel="stylesheet" href="../public/css/owl.theme.css">
    <link rel="stylesheet" href="../public/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../public/css/metisMenu/metisMenu-vertical.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../public/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../public/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../public/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- DATATABLES-->
    <link rel="stylesheet" href="../public/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../public/datatables/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../public/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-select.min.css">

</head>

<body>
  <div class="left-sidebar-pro">
    <nav id="sidebar" class="">
      <div class="sidebar-header">
        <!-- cambiar logo  --><a href="index.html"><img class="main-logo" src="../public/images/logosn.png" alt="" /></a>
        <strong><img src="../public/images/logosn.png" alt="" /></strong>
      </div>
      <div class="nalika-profile">
        <div class="profile-dtl">
          <a href="#"><img src="../files/usuarios/avatar.png" alt="" /></a>
          <h2><span class="min-dtn"><?php echo $_SESSION['nombre']; ?></span></h2>
        </div>
      </div>
    
      <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro">
          <ul class="metismenu" id="menu1">
            <li class="active">
              <a href="escritorio.php">
                <i class="icon nalika-home icon-wrap"></i>
                <span class="mini-click-non">Escritorio</span>
							</a>
            </li>
            <li>
              <a class="has-arrow" href="#" aria-expanded="true"><i class="fa fa-archive" aria-hidden="true"></i> <span class="mini-click-non">&nbsp;&nbsp;Almacen</span></a>
              <ul class="submenu-angle" aria-expanded="false">
                <li><a title="Articulos" href="producto.php"><span class="mini-sub-pro">Productos</span></a></li>
                <li><a title="Categoria" href="categoria.php"><span class="mini-sub-pro">Categoria</span></a></li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="#" aria-expanded="true"><i class="fa fa-cart-plus" aria-hidden="true"></i> <span class="mini-click-non">&nbsp;&nbsp;Compras</span></a>
              <ul class="submenu-angle" aria-expanded="false">
                <li><a title="Compras" href="404.html"><span class="mini-sub-pro">Compras</span></a></li>
                <li><a title="Proveedores" href="proveedor.php"><span class="mini-sub-pro">Proveedores</span></a></li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="#" aria-expanded="true"><i class="icon nalika-pie-chart icon-wrap"></i> <span class="mini-click-non">Ventas</span></a>
              <ul class="submenu-angle" aria-expanded="false">
                <li><a title="Ventas" href="venta.php"><span class="mini-sub-pro">Ventas</span></a></li>
                <li><a title="Clientes" href="cliente.php"><span class="mini-sub-pro">Clientes</span></a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>          
    </nav>
  </div>

  <div class="all-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <a href="escritorio.php"><img class="main-logo" src="../public/images/logosn.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>

    <div class="header-advance-area">
        <div class="header-top-area">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-top-wraper">
                  <div class="row">
                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                      <div class="menu-switcher-pro">
                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
												  <i class="icon nalika-menu-task"></i>
											  </button>
                      </div>
                    </div>
                  
                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                      <!-- <div class="header-top-menu tabl-d-n hd-search-rp">
                        <div class="breadcome-heading">
                          <form role="search" class="">
                            <input type="text" placeholder="Buscar..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                          </form>
                        </div>
                      </div> Buscar-->
                    </div> 
                  
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                      <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">                            
                          <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                              <i class="icon nalika-user"></i>
                              <span class="admin-name"><span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span></span>
                              <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                            </a>
                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                              <li><a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat"><span class="icon nalika-unlocked author-log-ic"></span> Cerrar sesión</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mobile-menu-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                  <nav id="dropdown">
                      <ul class="mobile-menu-nav">
                          <li><a data-toggle="collapse" data-target="#Charts" href="escritorio.php">Escritorio <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a></li>
                          <li><a data-toggle="collapse" data-target="#demo" href="#">Almacen <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                              <ul id="demo" class="collapse dropdown-header-top">
                                  <li><a href="articulo.php">Articulos</a></li>
                                  <li><a href="categoria.php">Categoria</a></li>
                              </ul>
                          </li>
                          <li><a data-toggle="collapse" data-target="#others" href="#">Compras <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                              <ul id="others" class="collapse dropdown-header-top">
                                  <li><a href="404.html">Ingresos</a></li>
                                  <li><a href="proveedor.php">Proveedores</a></li>
                              </ul>
                          </li>
                          <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Ventas<span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                              <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                  <li><a href="venta.php">Ventas</a></li>
                                  <li><a href="404.html">Cliente</a></li>
                              </ul>
                          </li>
                      </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


