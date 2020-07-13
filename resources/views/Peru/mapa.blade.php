    @extends('plantilla/plantilla')

    @section('contenido')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mapa del Peru</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>
        </div>

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Peru</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>

                            <!-- Opciones seleccionar mapa peru -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Elija opcion:</div>
                                <a class="dropdown-item" href="#">Fallecidos</a>
                                <a class="dropdown-item" href="#">Casos positivos</a>
                            </div>
                        </div>
                    </div>

                    <!-- grafica mapa peru -->
                    <div class="card-body">
                        <div class="col-12 ">
                            <div class="center-block">@yield('peru')</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->
    @endsection