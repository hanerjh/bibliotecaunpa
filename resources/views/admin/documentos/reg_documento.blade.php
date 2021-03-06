@extends('layout.layoutamin')
@section('contenido')
<style>
 label{ font-weight:bold; }
 #inputenlace{display: none;}
</style>
   <div class="col-md-8">
        <div class="main-card mb-3 card">
                <div class="card-body">
                    
                <h3 class="card-title">Registro de Documento</h3>
                        <p>En esta sección se podrán registrar los diferente documentos que genera la unidad como: Informes, Boletines, Novedades, etc.</p>
                     <form  action="/regdocumentos" method="POST"  enctype="multipart/form-data" class="needs-validation">                 
                        @csrf
                 
                        <div class="position-relative form-group">
                            <label for="exampleSelect" class="">Tipo de documento</label>
                            <select name="tipo_documento" id="idtipodocumento" class="form-control">

                                @foreach ($tipo_documentos as $tpdocumento)
                                    <option value="{{$tpdocumento->id}}">{{$tpdocumento->tdocumento}}</option>
                                @endforeach
                               
                               
                            </select>
                        </div>

                             <div class="form-group">
                            <label for="validationCustom01">Titulo</label>
                            <input type="text" name="titulo" class="form-control" id="validationCustom01"
                                placeholder="Titulo de Noticia"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @if($errors->has('titulo'))         
                            <small class="text-danger">{{$errors->first('titulo')}} </small>  
                           @endif
                            </div>        
                            
                    
                            <div class="form-group">
                                <label for="exampleText" class="">Descripcion</label>
                                <textarea name="descripcion" id="editor" class="form-control" id="validationCustom02" required ></textarea>
                                <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    @if($errors->has('descripcion'))         
                                    <small class="text-danger">{{$errors->first('descripcion')}} </small>  
                                   @endif
                            </div>
                            <!--EVALUAMOS QUE TIPO DE DOCUMENTO SEA DIFERENTE A ID=5 QUE ES VIDEO PARA QUE SALGA EL UPLOAD SINO, SALE EL TEXT INPUT-->
                         
                            <div id="inputupload" class="position-relative form-group">
                                <label for="exampleFile" class="">Imagen</label>
                                <input name="archivo" id="exampleFile" type="file" class="form-control-file">
                                @if($errors->has('archivo'))         
                                <small class="text-danger">{{$errors->first('archivo')}} </small>  
                               @endif
                            </div>
                       
                         <div id="inputenlace" class="position-relative form-group">
                                <label for="exampleFile" class="">Enlace</label>
                                <input name="enlace" id="exampleFile" type="text" class="form-control-file">
                                @if($errors->has('enlace'))         
                                <small class="text-danger">{{$errors->first('enlace')}} </small>  
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