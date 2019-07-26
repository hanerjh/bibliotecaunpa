@extends('layout.layout2')

@section('contenido')
    

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">EVENTOS
        <small></small>
      </h1>

     

      <div class="row">
        @foreach ($eventos as $evento)

        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
            
            <a href="eventos/{{$evento->id}}"><img class="card-img-top" src="/asset/img/eventos/{{$evento->img}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                <a href="eventos/{{$evento->id}}">{{ strtoupper($evento->titulo)}}</a>
                </h4>
              <p class="card-text">{!!str_limit($evento->contenido,'150')!!}</p>
              <small class="text-muted">Fecha de Publicación: {{Carbon\Carbon::parse($evento->publicado)-> format('M j, Y')}}</small>
              </div>
            </div>
          </div>
            
        @endforeach     
       
      </div>
      {{ $eventos->links() }}
      


      @endsection