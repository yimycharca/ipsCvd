<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/virus.png">
    <title>Covid - 19</title>

    <!-- Custom fonts for this template-->
    <link href="extensiones/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="img/virus.png" alt="COVID" width="50" height="50">

                </div>
                <div class="sidebar-brand-text mx-3">COVID - 19</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Subir Archivo CSV</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->




        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar espacio superior -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Usuario -->
                        <li class="nav-item dropdown no-arrow">

                            <a id="nav-link dropdown-toggle" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                <span class="caret mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}
                                </span>
                                <img class="img-profile rounded-circle" src="img/admin.png" width="10" height="10">
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">


                                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal"
                                    data-target="#logoutModal" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- /ini container-fluid -->

                <div class="container-fluid">
                    <div class="row">

                        <div class="col">
                            <!-- Importar CSV -->
                            <h4>Importar datos CSV de Fallecidos</h4>
                            <br><br>
                            <div class="container">
                                <form action="{{route('usuario.import.excel')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @if (Session::has('message1'))
                                    <div class="alert alert-success col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        {{Session::get('message1')}}
                                    </div>

                                    @endif

                                    <input type="file" name="file">
                                    <br><br>
                                    <div class="card-body col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <button class='btn btn-primary btn-user btn-block'>Importar</button>
                                    </div>
                                </form>
                            </div>
                        </div>



                        <div class="col">
                            <!-- Importar CSV -->
                            <h4>Importar datos CSV de Positivos</h4>
                            <br><br>
                            <div class="container">
                                <form action="{{route('positivo.import.excel')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @if (Session::has('message2'))
                                    <div class="alert alert-success col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        {{Session::get('message2')}}
                                    </div>

                                    @endif

                                    <input type="file" name="file">
                                    <br><br>
                                    <div class="card-body col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <button class='btn btn-primary btn-user btn-block'>Importar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->



            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>UNSA &copy;INGENIERIA DE PROCESOS Y SOFTWARE 2020</span>
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


    <!-- Bootstrap core JavaScript-->
    <script src="extensiones/jquery/jquery.min.js"></script>
    <script src="extensiones/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="extensiones/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="extensiones/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>