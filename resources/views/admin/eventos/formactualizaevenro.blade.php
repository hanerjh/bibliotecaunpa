@extends('layout.layoutamin')
@section('contenido')
<style>
 label{ font-weight:bold; }
</style>
   <div class="col-md-8">
        <div class="main-card mb-3 card">
                <div class="card-body">
                <h3 class="card-title">Registro de eventos</h3>
                   
                     <form  action="/regeventos" method="POST"  enctype="multipart/form-data" class="needs-validation">                 
                        @csrf
                 
                        <div class="position-relative form-group">
                            <label for="exampleSelect" class="">Tipo de Publicación</label>
                            <select name="tipo_evento" id="exampleSelect" class="form-control">

                                @foreach ($tipo_eventos as $evento)
                                 
                                  @if($eventos[0]->idtipoevento==$evento->id)
                                     <option value="{{$evento->id}}" selected>{{$evento->tipo_evento}}</option>
                                  
                                  @else
                                    <option value="{{$evento->id}}">{{$evento->tipo_evento}}</option>
                                  @endif
                                    
                                @endforeach
                               
                               
                            </select>
                        </div>

                             <div class="form-group">
                            <label for="validationCustom01">Titulo</label>
                             <input type="text" name="titulo" class="form-control" id="validationCustom01"  value="{{$eventos[0]->titulo}}"  placeholder="Titulo de Noticia"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @if($errors->has('titulo'))         
                            <small class="text-danger">{{$errors->first('titulo')}} </small>  
                           @endif
                            </div>        
                            
                    
                            <div class="form-group">
                                <label for="exampleText" class="">Descripcion</label>
                                <textarea name="descripcion" id="editor" class="form-control" id="validationCustom02"  required >{{$eventos[0]->contenido}}</textarea>
                                <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    @if($errors->has('descripcion'))         
                                    <small class="text-danger">{{$errors->first('descripcion')}} </small>  
                                   @endif
                            </div>

                            <div class="position-relative form-group">
                                <label for="exampleFile" class="">Imagen</label>
                                <input name="archivo" id="exampleFile" type="file" class="form-control-file">
                                @if($errors->has('archivo'))         
                                <small class="text-danger">{{$errors->first('archivo')}} </small>  
                               @endif
                            </div>
                        
                            <div class="form-group">
                                    <label for="example-datetime-local-input" >Fecha y hora de cierre</label>
                                      <input name="fecha_cierre" class="form-control" type="datetime-local"  id="example-datetime-local-input" value="">
                                      <small>Fecha Actual:  {{$eventos[0]->fecha_cierre}}</small>
                                      @if($errors->has('fecha_cierre'))         
                                      <small class="text-danger">{{$errors->first('fecha_cierre')}} </small>  
                                     @endif
                                  </div>
                   
                   
                    <button class="btn btn-primary" type="submit"> Registrar</button>
                        <div class="col-4">
                            @if(session()->has('msj'))
                            <div class="alert alert-success" role="alert">
                             {{ session('msj') }}
                            </div>
                            @endif
                      </div>
                </form>
    
                <script>
                  
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function () {
                        'use strict';
                        window.addEventListener('load', function () {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function (
                            form) {
                                form.addEventListener('submit', function (event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                      
                    })();
                      
                    
    
                </script>

            </div>
        </div>
    

   </div>



@endsection