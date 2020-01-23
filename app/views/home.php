<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>MULTIVALORES SERVICIOS CORPORATIVOS S.A.</title>

        <!-- App CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/summary.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/parallax.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/tablas.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/plugins/chart.js/chart.min.js"></script>
    </head>
    

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">
        
<?php

echo('

            <!-- Top Bar Start -->
            <div class="topbar">
        
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>MULTIVA</span><i class="zmdi zmdi-layers"></i></a>
                </div>
        
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
        
                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li><button class="button-menu-mobile open-left"><i class="zmdi zmdi-menu"></i></button></li>
                            <li><h4 class="page-title"></h4></li>
                        </ul>
        
                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline m-b-0">
                                        <li><a href="'.Config::getUrl().'/login" class="right-bar-toggle"><i class="fa fa-sign-out"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>
                        </ul>
        
                    </div>
                    <!-- end container -->
                </div>
                <!-- end navbar -->

');
?>

            </div>
            <!-- Top Bar End -->
        
        
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">           
                
                <div class="sidebar-inner slimscrollleft">
        
                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/logo.png" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                        </div>
                        <h5><a href="#">Multiva</a> </h5>
                        <ul class="list-inline">
                            <li><a href="#" ><i class="zmdi zmdi-settings"></i></a></li>
                            <li><a href="#" class="text-custom"><i class="zmdi zmdi-power"></i></a></li>
                        </ul>
                    </div>
                    <!-- End User -->

<?php

echo('

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <span class="text-muted menu-title">MENU DE NAVEGACION</span>
                        <ul>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-gear"></i> <span>CONFIGURACION</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">

                                    <li><a href="'.Config::getUrl().'/cuentas">Cuentas</a></li>
                                    <li><a href="'.Config::getUrl().'/cecos">Cecos</a></li>
                                    <li><a href="'.Config::getUrl().'/ciclo">Ciclo</a></li>

                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-file"></i> <span>INFORME</span><span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">

                                    <li><a href="'.Config::getUrl().'/editable">Editables</a></li>
                                    <li><a href="'.Config::getUrl().'/importar">Importar</a></li>
                                    <li><a href="'.Config::getUrl().'/reporte">Informe</a></li>
        
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
        
                </div>
        
            </div>
            <!-- Left Sidebar End -->

');
            ?>
        
        
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
        
                         <div class="wrapper">
                            
                                <section id="parallax1">
                                    <h1>Ofrecemos Servicios de Calidad</h1>
                                </section>

                                <section id="parallax2">

                                </section>

                                <section id="parallax3">
                                    <h1>Utilizamos la inteligencia en el negocio</h1>
                                </section>
                        </div>
                     </div> 
                    <!-- container -->
                </div> 
                <!-- content -->

                <footer class="footer">
            <script src="assets/js/global/config.js"></script>


            </div>
            <!-- End content-page -->

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>        