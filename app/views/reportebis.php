                        
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



                        <div class="row chart-card" hidden>
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <div class="dropdown pull-right">
                                        <a class="chart-close" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <canvas id="myChart" height="250"></canvas>
                                        </div>
                                    </div>



                                </div>

                            </div>

                        </div>



                        <div class="row report-card">
                            <div class="col-sm-12">
                        	    <div class="card-box">
                                    <div class="dropdown pull-right"></div>
                                    <h4 class="header-title m-t-0 m-b-30">SELECCIONE PARAMETROS</h4>

                        			<div class="row">

                                        <div class="col-lg-3">
	                                        <div class="form-group">
	                                            <label class="col-md-3 control-label">Anualidad:</label>
	                                            <div class="col-md-9">
	                                                <select type="text" class="form-control" id="selectYear">
                                                        <option value="2019">2019</option>
                                                    </select>
	                                            </div>
	                                        </div>
                                        </div>

                                        <div class="col-lg-3">
	                                        <div class="form-group">
                                                <label class="control-label col-md-3">Empresa:</label>
                                                <div class="col-md-9">
                                                    <select type="text" class="form-control" id="selectModule">

                                                    </select>
                                                </div>
	                                        </div>
                                        </div>

                                        <div class="col-lg-3">
	                                        <div class="form-group">
	                                            <label class="control-label col-md-3">Tipo:</label>
                                                <div class="col-md-9">
                                                    <select type="text" class="form-control" id="selectType">
                                                        <option value="modular">MENSUAL</option>
                                                        <option value="modular_acumulado">ACUMULADO</option>
                                                    </select>
                                                </div>
	                                        </div>
                                        </div>

                                        <div class="col-lg-3">
	                                        <input type="button" value="INFORME" class="form-control btn btn-success" id="btnReport">
                                        </div>

                                    </div>

                        		</div>

                            </div>

                        </div>



                        <div class="row report-card">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right"></div>
                                        <h4 class="header-title m-t-0 m-b-30">GASTOS MENSUALES POR UNIDAD DE NEGOCIO</h4>

                                        <table id="datatable" class="table table-stripped">
                                        
                                        <!-- AJAX -->

                                        </table>

                                </div>
                            </div>
                        </div>



                        
                    </div> 
                    <!-- container -->
                </div> 
                <!-- content -->

                <footer class="footer">2019 © Multiva.</footer>

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

        <script src="assets/js/global/conversion.js"></script>
        <script src="assets/js/global/config.js"></script>
        <script src="assets/js/storebis/easychart.js"></script>
        <script src="assets/js/storebis/storechart.js"></script>
        <script src="assets/js/storebis/storeformbis.js"></script>
        <script src="assets/js/storebis/storetablebis.js"></script>
        <script src="assets/js/storebis/storerequestbis.js"></script>




    </body>
</html>