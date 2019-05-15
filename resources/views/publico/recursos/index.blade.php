
@extends('layout.layout2')
@section('titulo','Recursos')
@section('contenido')

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Manuales y Tutoriales</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Tramite en linea</h5>
                    <p class="card-text">en esta seccion podra realizar solicitud de capacitacion,aquision y grado.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>

                 <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Politicas y reglamentos de BIblioteca</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Gestores bibliográficos</h5>
                          <p class="card-text">
                            ​​​​​​Herramientas permiten almacenar, administrar, organizar y compartir referencias bibliográficas.(EndNote web,zotero,mendeley,easybib)</p>
                          <a href="/gestoresbibliograficos" class="btn btn-primary">Ingresar</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Enlaces de Interes</h5>
                          <p class="card-text">
                            Atlas,Biografías,Buscadores,Diccionarios y Glosarios,Enciclopedias,Estadísticas,Tesauros,Otros recursos
                          </p>
                        <a href="/enlacesdeinteres" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
        </div>

        @endsection 