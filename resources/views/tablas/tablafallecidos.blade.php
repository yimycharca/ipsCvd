@extends('plantilla/plantilla')
@section('contenido')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Fallecidos</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Fallecidos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha_Fallecimiento</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Departamento</th>
                            <th>Provincia</th>
                            <th>Distrito</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Fecha_Fallecimiento</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Departamento</th>
                            <th>Provincia</th>
                            <th>Distrito</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach($fallecid as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->fecha_fall}}</td>
                            <td>{{$item->edad}}</td>
                            <td>{{$item->sexo}}</td>
                            <td>{{$item->departamento}}</td>
                            <td>{{$item->provincia}}</td>
                            <td>{{$item->distrito}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->



@endsection