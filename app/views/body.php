

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
                    <li><h4 class="page-title">MULTIVALORES SERVICIOS CORPORATIVOS S.A.</h4></li>
                </ul>

                <!-- Right(Notification and Searchbox -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!-- Notification -->
                        <div class="notification-box">
                            <ul class="list-inline m-b-0">

                                <li><a href="'.Config::getUrl().'/logoutmanager" class="right-bar-toggle"><i class="fa fa-sign-out"></i></a></li>

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

    <?php

    echo('

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">           
        
        <div class="sidebar-inner slimscrollleft">

            <!-- User -->
            <div class="user-box">
                <div class="user-img">
                    <img src="assets/images/logo.png" alt="user-img" title="Multiva" class="img-circle img-thumbnail img-responsive">
                    <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                </div>
                <h5><a href="#">Multiva</a> </h5>
                <ul class="list-inline">
                    <li><a href="#" ><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a href="#" class="text-custom"><i class="zmdi zmdi-power"></i></a></li>
                </ul>
            </div>
            <!-- End User -->

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
                            <li><a href="'.Config::getUrl().'/reporte">Informe por Empresa</a></li>
                            <li><a href="'.Config::getUrl().'/reportebis">Informe por Mes</a></li>


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




