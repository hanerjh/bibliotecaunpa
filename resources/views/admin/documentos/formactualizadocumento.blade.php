@extends('layout.layoutamin')
@section('contenido')
<style>
 label{ font-weight:bold; }
</style>
   <div class="col-md-8">
        <div class="main-card mb-3 card">
                <div class="card-body">
                <h3 class="card-title">Actualizacion de documentos</h3>
                   
                    <form  action="/regdocumentos/{{$documento[0]->id }}" method="POST"  enctype="multipart/form-data" class="needs-validation"> 
                        @method('PUT')                
                        @csrf
                 
                        <div class="position-relative form-group">
                            <label for="exampleSelect" class="">Tipo de documento</label>
                            <select name="tipo_evento" id="exampleSelect" class="form-control">

                                @foreach ($tipo_documentos as $tipo_documento)
                                 
                                  @if($documento[0]->fktipodocumento==$tipo_documento->id)
                                     <option value="{{$tipo_documento->id}}" selected>{{$tipo_documento->tdocumento}}</option>
                                  
                                  @else
                                    <option value="{{$tipo_documento->id}}">{{$tipo_documento->tdocumento}}</option>
                                  @endif
                                    
                                @endforeach
                               
                               
                            </select>
                        </div>

                             <div class="form-group">
                            <label for="validationCustom01">Titulo</label>
                             <input type="text" name="titulo" class="form-control" id="validationCustom01"  value="{{$documento[0]->titulo}}"  placeholder="Titulo de Noticia"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @if($errors->has('titulo'))         
                            <small class="text-danger">{{$errors->first('titulo')}} </small>  
                           @endif
                            </div>        
                            
                    
                            <div class="form-group">
                                <label for="exampleText" class="">Descripcion</label>
                                <textarea name="descripcion" id="editor" class="form-control" id="validationCustom02"  required >{{$documento[0]->descripcion}}</textarea>
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
                   
                                  <div class="position-relative form-group">
                                        <label for="exampleSelect" class="">Estado</label>
                                        <select name="estado" id="exampleSelect" class="form-control">
                                              @if($documento[0]->estado==1)
                                                 <option value="1" selected>Activo</option>
                                                 <option value="0">Inactivo</option>                                              
                                              @else
                                               <option value="1">Activo</option>
                                                <option value="0" selected>Inactivo</option>
                                              @endif
                                        </select>
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

