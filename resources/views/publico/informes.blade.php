@extends('layout.layout2')
@section('titulo','Informes de Biblioteca')
@section('contenido')
<style>
 .card-header{
   background-color:#e9ecef !important; 
 }
 .mb-0{
   color: #5b5555;
 }
</style>

<p> En esta sección encontrará disponible los informes realizados por la unidad</p>

<!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingOne1">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
                <h5 class="mb-0">
                    Informes Estadisticos<i class="fas fa-angle-down rotate-icon float-right"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1"
            data-parent="#accordionEx">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th scope="col">Titulo</th>
                            <!--<th scope="col">Nombre</th>-->
                            <th scope="col">Descripción</th>
                            <th scope="col">Fecha de Publicación</th>
                            <th scope="col">Archivo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informes as $informe)
                        @if ($informe->fktipodocumento==1)

                        <tr>
                            <td>{{ $informe->titulo}}</td>                            
                            <td>{{$informe->descripcion}}</td>
                            <td>{{Carbon\Carbon::parse($informe->created_at)-> format('M j, Y')}}</td>
                            <td><a href="asset/documentos/{{$informe->archivo}}" target="blank">Descargar</a></td>
                        </tr>

                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="repositorios">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                aria-expanded="false" aria-controls="collapseTwo2">
                <h5 class="mb-0">
                    Informes de Gestión <i class="fas fa-angle-down rotate-icon float-right"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
            data-parent="#accordionEx">
            <div class="card-body">

                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th scope="col">Titulo</th>
                            <!--<th scope="col">Nombre</th>-->
                            <th scope="col">Descripción</th>
                            <th scope="col">Archivo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informes as $informe)
                        @if ($informe->fktipodocumento==2)

                        <tr>
                            <td>{{ $informe->titulo}}</td>
                            <td>{{$informe->descripcion}}</td>
                            <td>{{$informe->created_at}}</td>
                            <td><a href="asset/documentos/{{$informe->archivo}}" target="blank"
                                    class="btn btn-primary">Descargar</a></td>
                        </tr>

                        @endif
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
        <!-- Accordion card -->

    </div>

    </div>
    <!-- Accordion wrapper -->
    @endsection
