
@extends('layout.layout2')
@section('contenido')   

      
      <!-- Intro Content -->
      <div class="row">
        <div class="col-md-8">
            <img class="img-fluid rounded mb-4" width="100%" src="{{$noticia->img}}" alt="">
        <h2>{{$noticia->titulo}}</h2>
        <p>{!!$noticia->descripcion!!}</p>
          <!--<img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">-->
        </div>

        <div class="col-md-4">

           
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Buscar Publicación</h5>
                    <form>
                        <div class="form-group">                         
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="¿Que estas buscando?">
                         
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                    </form>
                  
                  </div>
                </div>
           
              
          <div class="card my-4">
            <h5 class="card-header">Ultimas Publicaciones</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group">
                      @foreach($listanoticias as $listanoticia)
                        <li class="media py-1">
                        <img src="{{$listanoticia->img}}" width="80px" class="mr-3 mt-1" alt="...">
                          <div class="media-body ">
                            <h6 class="mt-0 mb-1 ">
                              <a href="/publicaciones/{{$listanoticia->id}}">{{$listanoticia->titulo}}</a>
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
    