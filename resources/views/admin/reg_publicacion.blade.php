@extends('layout.layoutamin')
@section('contenido')

   <div class="col-md-8">
        <div class="main-card mb-3 card">
                <div class="card-body">
                <h5 class="card-title">Registro de Noticia</h5>
                <form class="needs-validation" novalidate>
                 
                            <div class="position-relative form-group">
                                <label for="exampleSelect" class="">Tipo de Publicación</label>
                                <select name="publicacion" id="exampleSelect" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                             </div>

                             <div class="position-relative form-group">
                            <label for="validationCustom01">Titulo</label>
                            <input type="text" class="form-control" id="validationCustom01"
                                placeholder="First name" value="Mark" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        
                            
                            
                    
                            <div class="position-relative form-group">
                                <label for="exampleText" class="">Descripcion</label>
                                <textarea name="text" id="exampleText" class="form-control" id="validationCustom02" required ></textarea>
                                <div class="valid-feedback">
                                        Looks good!
                                    </div>
                            </div>

                            <div class="position-relative form-group">
                                <label for="exampleFile" class="">File</label>
                                <input name="file" id="exampleFile" type="file" class="form-control-file">
                            </div>

                            <div class="form-group ">
                                    <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                                    
                                      <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                    
                                  </div>
                        
                   
                   
                    <button class="btn btn-primary" type="submit"> Enviar</button>
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