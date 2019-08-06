@extends('layout.layout2')
@section('titulo','Políticas y Reglamentos')

@section('contenido')
<style>
 .card-header{
   background-color:#e9ecef !important; 
 }
 .mb-0{
   color: #5b5555;
 }
</style>

<p>En esta sección encontrará la políticas y reglamentos que de la biblioteca </p>

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

            <tr>
                <td >{{ $informe->titulo}}</td>                            
                <td>{{$informe->descripcion}}</td>
                <td>{{Carbon\Carbon::parse($informe->created_at)-> format('M j, Y')}}</td>
                <td><a href="storage/asset/documentos/{{$informe->archivo}}" target="blank">Descargar</a></td>
            </tr>

            @endforeach
        </tbody>
    </table>

    @endsection
