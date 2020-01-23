                        
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



                        <div class="row breakdown-card" hidden>
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <div class="dropdown pull-right">
                                        <a class="breakdown-close" data-toggle="dropdown" aria-expanded="false" id="breakdownClose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">INTRODUCIR PARAMETROS DE BUSQUEDA</h4>

                                    <div class="row">
                                    
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Centro de Costos:</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id="txtCeco">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label date-label">Fecha: 2019-03-</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="txtDay">
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <br>
                                    <br>

                                    <h4 class="header-title m-t-0 m-b-30 breakdown-title">DESGLOSE</h4>

                                    <table id="breakdowntable" class="table table-stripped"></table>

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
                                                <label class="control-label col-md-3">Mes:</label>
                                                <div class="col-md-9">
                                                    <select type="text" class="form-control" id="selectMonth">

                                                    </select>
                                                </div>
	                                        </div>
                                        </div>

                                        <div class="col-lg-3">
	                                        <div class="form-group">
	                                            <label class="control-label col-md-3">Tipo:</label>
                                                <div class="col-md-9">
                                                    <select type="text" class="form-control" id="selectType">
                                                        <option value="mensual">MENSUAL</option>
                                                        <option value="acumulado">ACUMULADO</option>
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

        <!-- Developed -->
        <script src="assets/js/global/dialog.js"></script>
        <script src="assets/js/global/config.js"></script>
        <script src="assets/js/global/conversion.js"></script>
        <script src="assets/js/store/breakdowntable.js"></script>
        <script src="assets/js/store/breakdownform.js"></script>
        <script src="assets/js/store/storeform.js"></script>
        <script src="assets/js/store/storetable.js"></script>
        <script src="assets/js/store/storerequest.js"></script>

        <!--  -->
        <script>


            
        </script>

    </body>
</html>