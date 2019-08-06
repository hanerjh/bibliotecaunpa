@extends('layout.layout2')

@section('contenido')
    

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Noticias
        <small></small>
      </h1>

     

      <div class="row">
        @foreach ($noticias as $noticia)

        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
             <!-- <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
            <a href="/publicaciones/{{$noticia->id}}"><img class="card-img-top" src="/storage/asset/img/noticias/{{$noticia->img}}" alt=""></a>
              <div class="card-body">
                <h5 class="card-title">
                <a href="/publicaciones/{{$noticia->id}}">{{ strtoupper($noticia->titulo) }}</a>
                </h5>
              <p class="card-text">{!!str_limit($noticia->descripcion,'150')!!}</p>
              <small class="text-muted">Fecha de Publicación: {{  Carbon\Carbon::parse($noticia->created_at)-> format('M j, Y')}}</small>
              <!--<small class="text-muted">Fecha de Publicación: {{  Carbon\Carbon::parse($noticia->created_at)->diffForHumans()}}</small>-->
              </div>
            </div>
          </div>
            
        @endforeach     
       
      </div>
      {{ $noticias->links() }}
      


      @endsection