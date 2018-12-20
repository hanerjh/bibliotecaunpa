

@extends('layout.layout2')

@section('titulo','Recursos Digitales')

@section('contenido')   

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
          
          <!-- Blog Post -->
          @if($bandera==0)
            @foreach($recursos as $recurso)
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <a href="#">
                      <img class="img-fluid rounded" src="asset/img/{{$recurso->foto}}" alt="">
                      </a>
                    </div>
                    <div class="col-lg-8">
                    <h5 class="card-title">{{ $recurso->nombre}}</h5>
                    <p class="card-text">{{$recurso->descripcion}}</p>
                    <a href="{{$recurso->enlace}}" class="btn btn-primary">Ingresar &rarr;</a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            {{"if".$bandera}}
            {{$recursos->links()}}
          @elseif($bandera==1)

            @foreach($recursos2 as $recurso)
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-4">
                        <a href="#">
                        <img class="img-fluid rounded" src="asset/img/{{$recurso->foto}}" alt="">
                        </a>
                      </div>
                      <div class="col-lg-8">
                      <h5 class="card-title">{{ $recurso->nombre}}</h5>
                      <p class="card-text">{{$recurso->descripcion}}</p>
                      <a href="{{$recurso->enlace}}" class="btn btn-primary">Ingresar &rarr;</a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              {{"else".$bandera}}
              {{ $recursos2->appends(['bandera' => '1'])->links() }}
          @endif

   
          <!-- Blog Post         

           Pagination 
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>-->

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Recursos Digitales</h5>
            <div class="card-body">
              <form method="POST" action="/bibliotecadigital">
                   <div class="form-group">
                 
                        {{ csrf_field() }}
                        <select class="form-control"  name="recurso_option_list" id="exampleFormControlSelect2">
                            <option>Seleccione..</option>
                            
                            <!-- Tomando los valores desde el modelo tipo de usuario-->
                              @foreach($tiporecursos as $tiporecurso)
                              <option value="{{$tiporecurso->id }}">{{ $tiporecurso->titulo }}</option>
                              @endforeach                  
                            
                          </select>

                    
                      
                            </div>
                        <div class="input-group">
                          <input type="text" name="brescurso" class="form-control" value="" placeholder="Buscar recurso...">
                          <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">Go!</button>
                          </span>
              </div>
            </form>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Enlacer Directos</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Catalogo en Linea</a>
                    </li>
                    <li>
                      <a href="#">Solicitud de reservas</a>
                    </li>
                    <li>
                      <a href="#">Paz y salvo</a>
                    </li>
                  </ul>
                </div>
            
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->
      @endsection