
<?php include 'vendor/snippets/head.php'?>
<script src="./crudsolicitudes.js" ></script>
<script src="./crudbienes.js" ></script>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'vendor/snippets/menu.php'?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Gestión de Compras</h1>
                     <div class="row">
                        <code class="col-sm-4 mb-2">
                        CREATE INDEX IDX_CUSTOMER_LAST_NAME
                            ON SOLICITUDES (CENTRO_COSTOS);
                            GO
                        </code>
                        <!-- <code class="col-sm-4">
                        I
                        </code> -->
                     </div>

                    <!-- Content Row -->
                    <div class="row mt-2">

                        <!-- First Column -->
                        <div class="col-lg-9">

                            <!-- Custom Text Color Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Solicitudes</h6>
                                </div>
                                <div class="card-body">

                                    <button type="submit" class="btn btn-outline-success btn-lg btn-block" onclick="nuevo()">Agregar</button>
                                    <!-- <p class="text-gray-100 p-3 bg-dark m-0">.text-gray-100</p>
                                    <p class="text-gray-200 p-3 bg-dark m-0">.text-gray-200</p>
                                    <p class="text-gray-300 p-3 bg-dark m-0">.text-gray-300</p>
                                    <p class="text-gray-400 p-3 bg-dark m-0">.text-gray-400</p>
                                    <p class="text-gray-500 p-3 m-0">.text-gray-500</p>
                                    <p class="text-gray-600 p-3 m-0">.text-gray-600</p>
                                    <p class="text-gray-700 p-3 m-0">.text-gray-700</p>
                                    <p class="text-gray-800 p-3 m-0">.text-gray-800</p>
                                    <p class="text-gray-900 p-3 m-0">.text-gray-900</p> -->
                                </div>
                            </div>

                            <!-- Custom Font Size Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Registros de Solicitudes</h6>
                                </div>
                                <div class="card-body">
                                <div class="table-responsive">
                                    <div class="table-wrapper">
                                        <div class="table-title">
                                        </div>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Codigo Solicitud</th>
                                                    <th>Responsable</th>
                                                    <th>Fecha</th>
                                                    <th>C.Costos</th>
                                                    <th>R.Presupuestal</th>
                                                    <td>Verificacion</td>
                                                    <th colspan="2">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id="registros" class="prueba">
                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>  
                            </div>
                            <div>
                                <div id="modalfrm" class="modal fade">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form>
                                                <input type="hidden" name="idsoli" id="idsoli" value="">
                                                <div class="modal-header">
                                                    <div class="modal-title">
                                                        <h3>Solicitudes</h3>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Codigo de Responsable:</label>
                                                        <input type="text" name="txtid" id="txtid" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Fecha:</label>
                                                        <input type="text" name="txtfecha" id="txtfecha" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Centro de Costos:</label>
                                                        <input type="text" name="txtcencos" id="txtcencos" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Rubro Presupuestal:</label>
                                                        <input type="text" name="txtrubpre" id="txtrubpre" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Verificacion de Solicitud:</label>
                                                        <input type="text" name="txtveri" id="txtveri" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                    <button class="btn btn-primary" type="button" onclick="guardar()">Guardar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div id="modalorden" class="modal fade">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form>
                                                <input type="hidden" name="idsoli" id="idsoli" value="">
                                                <div class="modal-header">
                                                    <div class="modal-title">
                                                        <h3>ORDEN CONTRACTUAL</h3>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Numero de Orden:</label>
                                                        <input type="text" name="txtid" id="txtid" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Proveedor:</label>
                                                        <input type="text" name="txtfecha" id="txtfecha" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Fecha Orden:</label>
                                                        <input type="text" name="txtcencos" id="txtcencos" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Monto Total:</label>
                                                        <input type="text" name="txtrubpre" id="txtrubpre" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Fecha de Entrega:</label>
                                                        <input type="text" name="txtveri" id="txtveri" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">RUC:</label>
                                                        <input type="text" name="txtveri" id="txtveri" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                    <button class="btn btn-primary" type="button" onclick="guardar()">Guardar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Second Column -->
                        <div class="col-lg-9">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Bienes</h6>
                                </div>
                                <div class="card-body">
                                    <button type="submit" class="btn btn-outline-success btn-lg btn-block" onclick="nuevobienes()">Agregar</button>
                                </div>
                            </div>
                            <!-- Background Gradient Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Registro de Bienes
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                            </div>
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Cod.Items</th>
                                                        <th>Bien</th>
                                                        <th>Cantidad</th>
                                                        <th>V.Unitario</th>
                                                        <th>V.Total</th>
                                                        <th>U.Medida</th>
                                                        <th>Cod.Solicitud</th>
                                                        <th colspan="2">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="registrosbienes">
                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div id="modalbienes" class="modal fade">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form>
                                                <input type="hidden" name="idb" id="idb" value="">
                                                <div class="modal-header">
                                                    <div class="modal-title">
                                                        <h3>Bienes</h3>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Nombre Bien:</label>
                                                        <input type="text" name="txtnombrebien" id="txtnombrebien" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Cantidad:</label>
                                                        <input type="text" name="txtcantidad" id="txtcantidad" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Valor Unitario:</label>
                                                        <input type="text" name="txtunitario" id="txtunitario" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Valor Total:</label>
                                                        <input type="text" name="txttotal" id="txttotal" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Unidad Medida:</label>
                                                        <input type="text" name="txtmedida" id="txtmedida" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Codigo Solicitud:</label>
                                                        <input type="text" name="txtsolicitud" id="txtsolicitud" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                    <button class="btn btn-primary" type="button"  onclick="guardarbienes()">Guardar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Third Column -->
                        <!-- <div class="col-lg-4"> -->

                            <!-- Grayscale Utilities -->
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Custom Grayscale Background Utilities
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="p-3 bg-gray-100">.bg-gray-100</div>
                                    <div class="p-3 bg-gray-200">.bg-gray-200</div>
                                    <div class="p-3 bg-gray-300">.bg-gray-300</div>
                                    <div class="p-3 bg-gray-400">.bg-gray-400</div>
                                    <div class="p-3 bg-gray-500 text-white">.bg-gray-500</div>
                                    <div class="p-3 bg-gray-600 text-white">.bg-gray-600</div>
                                    <div class="p-3 bg-gray-700 text-white">.bg-gray-700</div>
                                    <div class="p-3 bg-gray-800 text-white">.bg-gray-800</div>
                                    <div class="p-3 bg-gray-900 text-white">.bg-gray-900</div>
                                </div>
                            </div> -->
                        <!-- </div> -->

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
<script>listar()</script>
<SCript>listarbienes()</SCript>
<!-- <script>bloq()</script> -->
</html>