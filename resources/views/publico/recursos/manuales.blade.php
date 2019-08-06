@extends('layout.layout2')
@section('titulo','Manuales y Tutoriales')

@section('contenido')
<style>
 .card-header{
   background-color:#e9ecef !important; 
 }
 .mb-0{
   color: #5b5555;
 }
</style>

<p>En esta sección encontrará manules y tutoriales de los diferentes recursos electrónicos que ponemos a disposición de los usuarios. </p>

<!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingOne1">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
                <h5 class="mb-0">
                   Recuros en Documentos<i class="fas fa-angle-down rotate-icon float-right"></i>
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
                            <th scope="col">Descripción</th>
                            <th scope="col">Fecha de Publicación</th>
                            <th scope="col">Archivo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informes as $informe)
                        @if ($informe->fktipodocumento==5)

                        <tr>
                            <td >{{ $informe->titulo}}</td>                            
                            <td>{{$informe->descripcion}}</td>
                            <td>{{Carbon\Carbon::parse($informe->created_at)-> format('M j, Y')}}</td>
                            <td><a href="storage/asset/documentos/{{$informe->archivo}}" target="blank">Descargar</a></td>
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
                   Recursos en Video<i class="fas fa-angle-down rotate-icon float-right"></i>
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

                            <th scope="col">Videotutorial</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Ir al recurso</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informes as $informe)
                        @if ($informe->fktipodocumento==6)

                        <tr>
                            <td>{{ $informe->titulo}}</td>
                            <td>{{$informe->descripcion}}</td>                          
                            <td><a href="{{$informe->archivo}}" target="blank"
                                    class="btn btn-primary btn-sm">Ver tutorial</a></td>
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
