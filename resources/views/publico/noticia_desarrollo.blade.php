
@extends('layout.layout2')
@section('miga','Noticias')
@section('contenido')   

      
      <!-- Intro Content -->
      <div class="row">
        <div class="col-md-8">
          <img class="img-fluid rounded-0 mb-4" width="100%" src="/storage/asset/img/noticias/{{ $noticia->img }}" alt="">
          <h2 class="titulo">{{ strtoupper($noticia->titulo)}}</h2>
          <small class="text-muted"><strong>Fecha de Publicación: {{Carbon\Carbon::parse($noticia->created_at)-> format('M j, Y')}}</strong></small>
       
          <p class="mt-3 text-justify">{!!$noticia->descripcion!!}</p>
          <!--<img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">-->
        </div>

        <div class="col-md-4">
           
              
          <div class="card border-0">
            <h5 class="card-header bg-listheader">Ultimas Publicaciones</h5>
            <div class="card-body body-menu_lista">
              <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group">
                      @foreach($listanoticias as $listanoticia)
                        <li class="media py-1 lista_border_bottom">
                        <img src="/storage/asset/img/noticias/{{ $listanoticia->img }}" width="80px" class="mr-3 mt-1" alt="...">
                          <div class="media-body ">
                            <h6 class="mt-0 mb-1 ">
                              <a href="/publicaciones/{{$listanoticia->id}}">{{ strtoupper($listanoticia->titulo)}}</a>
                            </h6>
                          
                            <!--<small>{{$listanoticia->created_at}}</small>-->
                          </div>
                        </li>
                        @endforeach
                      </ul>


                </div>
            
              </div>
            </div>
          </div>
       

        </div>
      </div>     
      
      

      
      @endsection
    