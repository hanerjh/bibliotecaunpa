
@extends('layout.layout2')
@section('miga','Eventos')
@section('contenido')   

@isset($evento)
    

      
      <!-- Intro Content -->
      <div class="row">
        <div class="col-md-8">
            <img class="img-fluid rounded mb-4" width="100%" src="/storage/asset/img/eventos/{{$evento->img}}" alt="">
        <h2  class="titulo">{{$evento->titulo}}</h2>
        <small class="text-muted"><strong>Fecha de Publicación: {{Carbon\Carbon::parse($evento->created_at)-> format('M j, Y')}}</strong></small>
        <p class="mt-3">{!!$evento->contenido!!}</p>
          <!--<img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">-->
        </div>

        <div class="col-md-4">
          <div class="card ">
            <h5 class="card-header bg-listheader">Ultimas Eventos</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group">
                      @foreach($listanoticias as $listanoticia)
                        <li class="media py-1 lista_border_bottom">
                        <img src="/storage/asset/img/eventos/{{$listanoticia->img}}" width="80px" class="mr-3 mt-1" alt="...">
                          <div class="media-body ">
                            <h6 class="mt-0 mb-1 ">
                              <a href="/eventos/{{$listanoticia->id}}">{{ strtoupper($listanoticia->titulo)}}</a>
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
      
      @endisset

      
      @endsection
    