@extends('layout.layoutamin')
@section('contenido')

   <div class="col-md-8">
        <div class="main-card mb-3 card">
                <div class="card-body">
                <h5 class="card-title">Actualizar Recursos</h5>
                <form  action="/recursosElectronicos/{{$recurso[0]->id }}" method="POST"  enctype="multipart/form-data" class="needs-validation">  
                     @method('PUT')                   
                        @csrf

                        <div class="position-relative form-group">
                                <label for="exampleSelect" class="">Tipo de Recurso</label>
                                <select name="tipo_recurso" id="exampleSelect" class="form-control">
    
                                    @foreach ($tipo_recursos as $tprecurso)
                                        @if($tprecurso->id==$recurso[0]->tipo_recursos_id)
                                        <option value="{{$tprecurso->id}}" selected>{{$tprecurso->titulo}}</option>
                                        @else
                                        <option value="{{$tprecurso->id}}">{{$tprecurso->titulo}}</option>
                                        @endif
                                    @endforeach
                                   
                                   
                                </select>
                            </div>
                             <div class="form-group">
                            <label for="validationCustom01">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="validationCustom01"
                                         value="{{$recurso[0]->nombre}}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @if($errors->has('nombre'))         
                            <small class="text-danger">{{$errors->first('nombre')}} </small>  
                           @endif
                            </div>        
                            
                    
                            <div class="form-group">
                                <label for="exampleText" class="">Descripcion</label>
                                <textarea name="descripcion" id="editor" class="form-control" id="validationCustom02" required >{{$recurso[0]->descripcion}}</textarea>
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
                                    <label for="validationCustom01">Enlace del Recurso</label>
                                    <small>Ingresar el enlace del recurso que va a registrar</small>
                                    <input type="text" name="enlace" class="form-control" id="validationCustom01"
                                        value="{{$recurso[0]->enlace}}"  required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    @if($errors->has('enlace'))         
                                    <small class="text-danger">{{$errors->first('enlace')}} </small>  
                                   @endif
                             </div> 
                   
                   
                            <div class="position-relative form-group">
                                    <label for="exampleSelect" class="">Estado</label>
                                    <select name="estado" id="exampleSelect" class="form-control">
                                          @if($recurso[0]->estado==1)
                                             <option value="1" selected>Activo</option>
                                             <option value="0">Inactivo</option>                                              
                                          @else
                                           <option value="1">Activo</option>
                                            <option value="0" selected>Inactivo</option>
                                          @endif
                                    </select>
                                </div>

                    <button class="btn btn-primary" type="submit"> Actualizar Noticia</button>
                </form>

                <div class="col-12">
                        @if(session()->has('msj'))
                        <div class="alert alert-success" role="alert">
                         {{ session('msj') }}
                        </div>
                        @endif
                      </div>
                <!--<script>
                  
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
                      
                    
    
                </script>-->

            </div>
        </div>
    

   </div>

   @section('script')
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>
@endsection

@endsection