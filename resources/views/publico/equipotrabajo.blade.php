@extends('layout.layout2')

@section('titulo','Equipo de Biblioteca')

@section('contenido')

<!-- equipo de trabajo -->

<div class="row">
    
      @foreach ($equipo as $eq)
      <div class="col-6 ">  
      <div class="card mb-3 border border-secondary">
          <div class="row no-gutters">
            
            <div class="col-md-8">
              <div class="card-body">
              <h5 class="card-title">{{$eq->nombre}} {{ $eq->apellidos}}</h5>
              <dl class="row">
                  <dt class="col-sm-4">Cargo:</dt>
                 <dd class="col-sm-8">{{$eq->cargo}}</dd>
                 <dt class="col-sm-4">Email:</dt>
                 <dd class="col-sm-8">{{$eq->email}}</dd>
                 <dt class="col-sm-4">Telefono:</dt>
                 <dd class="col-sm-8">2405555 Ext 3903</dd>
              </dl>
            
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>

            <div class="col-md-4">
                <img src="asset/img/user.jpg" class="img-fluid"  class="" alt="...">
              </div>
          </div>
        </div>
      </div>
      
      
      @endforeach
           
   
    
</div>
<!-- /.row -->
<style>
dd{font-size: 14px;}
</style>
@endsection