
@extends('layout.layout2')
@section('titulo','Recursos de Información')
@section('contenido')

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Manuales y Tutoriales</h5>
                    <p class="card-text">Consulta nuestros manuales y tutoriales de los diferentes servicios y recursos académicos que ofrece la biblioteca.</p>
                    <a href="/manualesytutoriales" class="btn btn-primary">Ingresar</a>
                  </div>
                </div>
              </div>
              <!--<div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Tramite en linea</h5>
                    <p class="card-text">En esta sección podrá realizar solicitud de capacitacion,aquision y grado.</p>
                    <a href="#" class="btn btn-primary">Ingresar</a>
                  </div>
                </div>
              </div>-->

                 <div class="col-sm-4">
                      <div class="card mb-2" >
                        <div class="card-body">
                          <h5 class="card-title">Políticas y reglamentos de BIblioteca</h5>
                          <p class="card-text">Consulta las politicas y reglamentos que rigen en la BIblioteca</p>
                          <a href="/regalmentos" class="btn btn-primary">Ingresar</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Gestores bibliográficos</h5>
                          <p class="card-text">
                            Consulta algunas herramientas que te ayudarán en la gestión de referencias de citas bibliográficas.</p>
                          <a href="/gestoresbibliograficos" class="btn btn-primary">Ingresar</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Enlaces de Interés</h5>
                          <p class="card-text">
                            Encontrará algunos recursos como Atlas, Biografías, Buscadores, Diccionarios y Glosarios, Enciclopedias, entre otros.
                            Esta sección posee fuentes de información adicional que será de gran ayuda en los procesos académicos.
                            
                          </p>
                        <a href="/enlacesdeinteres" class="btn btn-primary">Ingresar</a>
                        </div>
                      </div>
                    </div>
        </div>

        @endsection 