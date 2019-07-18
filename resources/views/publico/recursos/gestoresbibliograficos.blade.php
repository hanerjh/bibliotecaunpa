@extends('layout.layout2')
@section('titulo','')
@section('contenido')
<h2>Gestores de Referencia Bibliográficos</h2>
<p>
    Un gestor bibliográfico o gestor de referencias bibliográficas es un software que permite crear, almacenar, organizar, compartir e insertar referencias bibliográficas, las cuales recoge de las fuentes de información 123,  éstas  se pueden utilizar para crear citas bibliográficas.  
</p>

 @foreach ($recursos as $recurso)
 
 <a href="{{$recurso->enlace}}" ><h4>{{$recurso->nombre}}</h4></a>
      <p>{{$recurso->descripcion}}</p>

 @endforeach

@endsection