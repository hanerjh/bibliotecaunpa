@extends('layout.layout2')
@section('titulo','Enlaces de Interes')
@section('contenido')

<p> Esta sección posee fuentes de informacion adicional que sera de gran ayuda en los procesos academicos.  </p>

<!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card">
      
          <!-- Card header -->
          <div class="card-header" role="tab" id="headingOne1">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
              aria-controls="collapseOne1">
              <h5 class="mb-0">
               Buscadores Académicos<i class="fas fa-angle-down rotate-icon float-right"></i>
              </h5>
            </a>
          </div>
      
          <!-- Card body -->
          <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">LOGO</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
          @foreach ($recursos as $recurso)
            @if ($recurso->tipo_recursos_id==5)
           
                  <tr>
                    <th scope="row">
                       <img class="card-img-top" src="asset/img/{{$recurso->foto}}"  alt="Card image cap" >
                    </th>
                    <td>{{ $recurso->foto}}</td>
                    <td>{{ $recurso->nombre}}</td>
                    <td>{{$recurso->descripcion}}</td>
                    <td><a href="{{$recurso->enlace}}" class="btn btn-primary">Ingresar -></a></td>
                  </tr>
           
            @endif
          @endforeach
          </tbody>
        </table>
            </div>
          </div>
      
        </div>
        <!-- Accordion card -->
      
        <!-- Accordion card -->
        <div class="card">
      
          <!-- Card header -->
          <div class="card-header" role="tab" id="repositorios">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
              aria-expanded="false" aria-controls="collapseTwo2">
              <h5 class="mb-0">
               Repositorios <i class="fas fa-angle-down rotate-icon float-right"></i>
              </h5>
            </a>
          </div>
      
          <!-- Card body -->
          <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
            <div class="card-body">
               
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">LOGO</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
              @foreach ($recursos as $recurso)
                @if ($recurso->tipo_recursos_id==6)
               
                      <tr>
                        <th scope="row">
                           <img class="card-img-top" src="asset/img/{{$recurso->foto}}" >
                        </th>
                        <td>{{ $recurso->foto}}</td>
                        <td>{{ $recurso->nombre}}</td>
                        <td>{{$recurso->descripcion}}</td>
                        <td><a href="{{$recurso->enlace}}" class="btn btn-primary">Ingresar -></a></td>
                      </tr>
               
                @endif
              @endforeach
              </tbody>
            </table>
            </div>
          
          </div>
      
        </div>
        <!-- Accordion card -->
      
         <!-- Accordion card -->
         <div class="card">
      
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingThree3">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree5"
                aria-expanded="false" aria-controls="collapseThree3">
                <h5 class="mb-0">
                Gestores Bibliográficos <i class="fas fa-angle-down rotate-icon float-right"></i>
                </h5>
              </a>
            </div>
        
            <!-- Card body -->
            <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
              <div class="card-body">
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">LOGO</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
            @foreach ($recursos as $recurso)
              @if ($recurso->tipo_recursos_id==4)
             
                    <tr>
                      <th scope="row">
                         <img class="card-img-top" src="asset/img/{{$recurso->foto}}"  alt="Card image cap" >
                      </th>
                      <td>{{ $recurso->foto}}</td>
                      <td>{{ $recurso->nombre}}</td>
                      <td>{{$recurso->descripcion}}</td>
                      <td><a href="{{$recurso->enlace}}" class="btn btn-primary">Ingresar -></a></td>
                    </tr>
             
              @endif
            @endforeach
            </tbody>
          </table>
              </div>
            </div>
        
          </div>
          <!-- Accordion card -->
        <!-- Accordion card -->
        <div class="card">
      
          <!-- Card header -->
          <div class="card-header" role="tab" id="headingThree3">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
              aria-expanded="false" aria-controls="collapseThree3">
              <h5 class="mb-0">
              Dicconarios <i class="fas fa-angle-down rotate-icon float-right"></i>
              </h5>
            </a>
          </div>
      
          <!-- Card body -->
          <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">LOGO</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
          @foreach ($recursos as $recurso)
            @if ($recurso->tipo_recursos_id==7)
           
                  <tr>
                    <th scope="row">
                       <img class="card-img-top" src="asset/img/{{$recurso->foto}}"  alt="Card image cap" >
                    </th>
                    <td>{{ $recurso->foto}}</td>
                    <td>{{ $recurso->nombre}}</td>
                    <td>{{$recurso->descripcion}}</td>
                    <td><a href="{{$recurso->enlace}}" class="btn btn-primary">Ingresar -></a></td>
                  </tr>
           
            @endif
          @endforeach
          </tbody>
        </table>
            </div>
          </div>
      
        </div>
        <!-- Accordion card -->

           <!-- Accordion card -->
           <div class="card">
      
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThree3">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
                    aria-expanded="false" aria-controls="collapseThree3">
                    <h5 class="mb-0">
                    Bibliotecas <i class="fas fa-angle-down rotate-icon float-right"></i>
                    </h5>
                  </a>
                </div>
            
                <!-- Card body -->
                <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                  <div class="card-body">
                      <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">LOGO</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                @foreach ($recursos as $recurso)
                  @if ($recurso->tipo_recursos_id==10)
                 
                        <tr>
                          <th scope="row">
                             <img class="card-img-top" src="asset/img/{{$recurso->foto}}"  alt="Card image cap" >
                          </th>
                          <td>{{ $recurso->foto}}</td>
                          <td>{{ $recurso->nombre}}</td>
                          <td>{{$recurso->descripcion}}</td>
                          <td><a href="{{$recurso->enlace}}" class="btn btn-primary">Ingresar -></a></td>
                        </tr>
                 
                  @endif
                @endforeach
                </tbody>
              </table>
                  </div>
                </div>
            
              </div>
              <!-- Accordion card -->
      
      </div>
      <!-- Accordion wrapper -->
@endsection