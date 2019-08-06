

@extends('layout.layout2')
@section('titulo','Recursos Digitales')
@section('contenido')   


<div id="pg" class="row">
    
        <!-- Blog Entries Column -->
        <div  class="col-md-9">
        <div class="row">
          <!-- Blog Post -->
          @if($bandera==0)
            @foreach($recursos as $recurso)
             
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                     @if ($recurso->foto!="" || $recurso->foto!=null)  
                        <div style="background-image: url({{url('/storage/asset/img/recursos/'.$recurso->foto)}});  background-repeat:no-repeat; background-size: contain; background-position: center center; height:100px;">
                      </div>                   
                     
                      @else
                      <img class="card-img-top" src="/storage/asset/img/recursos/noimage.png"  alt="Card image cap">

                     @endif
                    <div class="card-body">
                        <h6 class="card-title" data-bandera-type="0">{{ $recurso->nombre}}</h6>
                        <p class="card-text">{{str_limit($recurso->descripcion,140)}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{$recurso->enlace}}" class="btn btn-sm  btn-outline-primary">Ingresar &rarr;</a>
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
                
                  <div class="col-md-4">
                      <div class="card mb-4 box-shadow">
                          @if ($recurso->foto!="" || $recurso->foto!=null)
                          <div style="background-image: url({{url('/storage/asset/img/recursos/'.$recurso->foto)}});  background-repeat:no-repeat; background-size: contain; background-position: center center; height:100px;">
                          </div> 
                           @else
                           <img class="card-img-top" src="/storage/asset/img/recursos/noimage.png" alt="Card image cap">
     
                          @endif                          <div class="card-body">
                              <h6 class="card-title">{{ $recurso->nombre}}</h6>
                              <p class="card-text">{{str_limit($recurso->descripcion,140)}}</p>
                              <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                      <a href="{{$recurso->enlace}}" class="btn btn-sm btn-outline-primary">Ingresar &rarr;</a>
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
             
              <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                      @if ($recurso->foto!="" || $recurso->foto!=null)
                      <div style="background-image: url({{url('/storage/asset/img/recursos/'.$recurso->foto)}});  background-repeat:no-repeat; background-size: contain; background-position: center center; height:100px;">
                      </div> 
                       @else
                       <img class="card-img-top" src="/storage/asset/img/recursos/noimage.png"  alt="Card image cap">
 
                      @endif                      <div class="card-body">
                          <h6 class="card-title">{{ $recurso->nombre}}</h6>
                          <p class="card-text">{{str_limit($recurso->descripcion,140)}}</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <a href="{{$recurso->enlace}}" class="btn btn-sm btn-outline-primary">Ingresar &rarr;</a>
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
        <div class="col-md-3">

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
                          <button class="btn btn-block btn-primary mt-1" type="submit">Buscar</button>
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
                      <a href="http://unipacifico.metabiblioteca.org/" class="list-group-item list-group-item-action "><i class="fas fa-angle-right"></i> Catálogo en Línea</a> 
                    </li>
                    <li>
                        <a href="https://forms.gle/Yjd6rLixXLVewtYa8" class="list-group-item list-group-item-action "><i class="fas fa-angle-right"></i> Solicitar Reserva</a>   
                    </li>
                    <li>
                        <a href="/estatus" class="list-group-item list-group-item-action"> <i class="fas fa-angle-right"></i> Consultar Multas</a>
                    </li>
                  </ul>
                </div>
            
              </div>
            </div>
          </div>

         

        </div>

      </div>
      <!-- /.row -->

      @endsection


     @section('script')
      <!--   <script>
  
           $(document).ready(function(){
              $("#tiporecurso").on('change', function(e){
                e.preventDefault(); 
                alert( this.value );
                //var url="/bibliotecadigital/"+this.value;
                //$.get( url)
                $.ajax({
                    type: "post",
                    url: "/bibliotecadigital/"+this.value,
                    data: $('select#tiporecurso').serialize()
                }).success:(function(data) {
                //  e.stopPropagation();
                 // console.log(data);
                  //$("#pg").hide();
                 //$("#result").html(data);
                 alert(data);
                });
              });
            });
    </script>-->
      @endsection