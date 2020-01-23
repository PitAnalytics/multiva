                        
                        <div class="row" hidden>
                            <div class="col-md-12">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a class="dropdown-toggle card-drop">
                                            <i class="fa fa-times" id="closeDialog"></i>
                                        </a>
                                    </div>

                                    <p>
                                        Presione en la palomita para incluir o excluir centros de costo, si nuestro centro de costo 
                                    </p>

                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right"></div>

                        			<h4 class="header-title m-t-0 m-b-30m dynamic-title">CENTROS DE COSTO</h4>

                                    <!-- comienza formulario de busqueda -->
                        			<div class="row">
                                        <form>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input type="button" class="btn btn-primary btn-block" value="AGREGAR NUEVO" class="form-control" id="btnSwitch">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </form>
                                    </div>
                                    <!-- termina formulario de busqueda -->
                                    <br>
                                    <br>
                                    <!-- comienza formulario de busqueda -->
                        			<div class="row">
                                        <form class="form-horizontal" role="form" id="formRead" >
 
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Empresa</label>
                                                    <div class="col-md-10">
                                                        <select type="text" class="form-control" id="selectModule">
                                                            <option value="all">TODOS</option>
                                                            <option value="BANCO">BANCO</option>
                                                            <option value="CASA">CASA</option>
                                                            <option value="GRUPO">GRUPO</option>
                                                            <option value="OPERADORA">OPERADORA</option>
                                                            <option value="SERVICIOS">SERVICIOS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">CeCo</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" id="txtCeco">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                        </form>
                                    </div>
                                    <!-- termina formulario de busqueda -->

                                    <!-- empieza formulario de adicion -->
                        			<div class="row">
                                        <form class="form-horizontal" role="form" id="formAdd" hidden>


                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Empresa</label>
                                                    <div class="col-md-10">

                                                        <input type="text" class="form-control" id="txtAddModule">

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">CeCo</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" id="txtAddCeco">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="col-lg-3">
                                                <input type="button" class="form-control btn btn-success" value="AGREGAR" id="btnAdd">
                                            </div>
                                            <!-- end col -->

                                        </form>
                                    </div>
                                    <!-- termina formulario de adicion -->

                                    <table id="datatable" class="table table-stripped"></table>


                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                </div> 
                <!-- content -->

                <footer class="footer">
                    2019 © Multiva.
                </footer>

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

        <!-- Developed -->
        <script src="assets/js/global/config.js"></script>
        <script src="assets/js/global/conversion.js"></script>
        <script src="assets/js/cecos/cecosrequest.js"></script>
        <script src="assets/js/cecos/cecosform.js"></script>
        <script src="assets/js/cecos/cecostable.js"></script>


    </body>
</html>