

@extends('layout.layout2')
@section('titulo','Recursos Digitales')
@section('contenido')   


<div id="pg" class="row">
    
        <!-- Blog Entries Column -->
        <div  class="col-md-8">
        <div class="row">
          <!-- Blog Post -->
          @if($bandera==0)
            @foreach($recursos as $recurso)
             <!-- <div  class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <a href="#">
                      <img class="img-fluid rounded" src="asset/img/{{$recurso->foto}}" alt="">
                      </a>
                    </div>
                    <div class="col-lg-8">
                    <h5 class="card-title" data-bandera-type="0">{{ $recurso->nombre}}</h5>
                    <p class="card-text">{{str_limit($recurso->descripcion,80)}}</p>
                    <a href="{{$recurso->enlace}}" class="btn btn-primary">Ingresar &rarr;</a>
                  
                    </div>
                  </div>
                </div>
              </div>-->
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="asset/img/{{$recurso->foto}}" style="max-height: 18rem;" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title" data-bandera-type="0">{{ $recurso->nombre}}</h6>
                        <p class="card-text">{{str_limit($recurso->descripcion,140)}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{$recurso->enlace}}" class="btn btn-lg btn-block btn-outline-primary">Ingresar &rarr;</a>
                               </div>
                         
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-12">
                {{$recursos->appends(['idtiporecurso' => $recurso->tipo_recursos_id])->links()}}
            </div>
           
         

          @elseif($bandera==1)
              
              @forelse($recursos as $recurso)
                 <!-- <div class="card mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-4">
                          <a href="#">
                          <img class="img-fluid rounded" src="asset/img/{{$recurso->foto}}" alt="">
                          </a>
                        </div>
                        <div class="col-lg-8">
                        <h5 class="card-title" >{{ $recurso->nombre}}</h5>
                        <p class="card-text">{{$recurso->descripcion}}</p>
                      
                        <a href="{{$recurso->enlace}}" class="btn btn-primary">Ingresar &rarr;</a>
                        </div>
                      </div>
                    </div>
                  </div>-->

                  <div class="col-md-4">
                      <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="asset/img/{{$recurso->foto}}" style="max-height: 18rem;"  alt="Card image cap">
                          <div class="card-body">
                              <h6 class="card-title">{{ $recurso->nombre}}</h6>
                              <p class="card-text">{{str_limit($recurso->descripcion,140)}}</p>
                              <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                      <a href="{{$recurso->enlace}}" class="btn btn-lg btn-block btn-outline-primary">Ingresar &rarr;</a>
                                     </div>
                                
                              </div>
                          </div>
                      </div>
                  </div>
                  @empty
                  <div class="alert alert-primary" role="alert">Por el momento no tenemos contenidos para este recurso</div>      
                
                @endforelse
                @if(isset($recurso))
                   <div class="col-12"> 
                  {{ $recursos->appends(['idtiporecurso' => $recurso->tipo_recursos_id,'data-bandera-type'=>'1'])->links() }}
                   </div>
               @endif

          @elseif($bandera==3)
        
              @foreach($recursos as $recurso)
              <!--<div class="card mb-4">
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
              </div>-->
              <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                      <img class="card-img-top" src="asset/img/{{$recurso->foto}}" style="max-height: 18rem;" alt="Card image cap" height="121">
                      <div class="card-body">
                          <h6 class="card-title">{{ $recurso->nombre}}</h6>
                          <p class="card-text">{{str_limit($recurso->descripcion,140)}}</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <a href="{{$recurso->enlace}}" class="btn btn-lg btn-block btn-outline-primary">Ingresar &rarr;</a>
                                 </div>
                            
                          </div>
                      </div>
                  </div>
              </div>
            @endforeach 
            <div class="col-12">
             {{$recursos->appends(['data-bandera-type'=>'3'])->links()}}
            </div>
          @endif    
          </div>
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
                        <select class="form-control" id="tiporecurso" name="recurso_option_list" id="exampleFormControlSelect2">
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


      @section('script')
        <!-- <script>
           $(document).ready(function(){
              $("#tiporecurso").on('change', function(e){
                e.preventDefault(); 
                alert( this.value );
                var url="/bibliotecadigital/"+this.value;
                //$.get( url)
                $.ajax({
                    type: "get",
                    url: "/bibliotecadigital/"+this.value,
                   // data: $('select#tiporecurso').serialize()
                }).done(function(data) {
                //  e.stopPropagation();
                 // console.log(data);
                  //$("#pg").hide();
                 $("#result").html(data);
                });
              });
            });
    </script>-->
      @endsection