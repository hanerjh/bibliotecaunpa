

@extends('layout.layout2')

@section('titulo','Recursos Digitales')
@section('contenido')   

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
          
          <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <a href="#">
                    <img class="img-fluid rounded" src="asset/img/proquest.png" alt="">
                  </a>
                </div>
                <div class="col-lg-8">
                  <h5 class="card-title">E-libro</h5>
                  <p class="card-text">Gran base de datos que contiene información de documentos y libros electrónicos para todas las áreas del conocimiento, que el usuario puede visualizar en texto completo.
                    Para su consulta se puede ingresar a través del Sistema de Información Academusoft con nombre de usuario y clave.
                    Si tiene problemas a la hora de buscar información en esta plataforma consulte el instructivo.</p>
                  <a href="#" class="btn btn-primary">Ingresar &rarr;</a>
                </div>
              </div>
            </div>
           </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <a href="#">
                    <img class="img-fluid rounded" src="asset/img/logo_ebsco.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-8">
                  <h5 class="card-title">EPSCO</h5>
                  <p class="card-text">Ofrece una gran variedad de base de datos, de materiales variados (libros, revistas, informes, conferencias) con textos completos en todas las áreas del saber. Todas estas bases de datos permiten realizar investigaciones rápidas, fáciles y eficaces.</p>
                  <a href="#" class="btn btn-primary">Ingresar &rarr;</a>
                </div>
              </div>
            </div>
           </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <a href="#">
                    <img class="img-fluid rounded" src="asset/img/artarquitectura.JPG" alt="">
                  </a>
                </div>
                <div class="col-lg-8">
                  <h5 class="card-title">ART & ARCHITECTURE</h5>
                  <p class="card-text">Art & Architecture Complete proporciona una cobertura de texto completo de 380 publicaciones periódicas y más de 220 libros. Además, esta base de datos ofrece índices y resúmenes completos de más de 780 publicaciones académicas, revistas y publicaciones especializadas como así también de más de 230 libros. Art & Architecture Complete también proporciona una cobertura seleccionada para más de 70 publicaciones y una colección de más de 63.000 imágenes proporcionada por Picture Desk y otros.</p>
                  <a href="#" class="btn btn-primary">Ingresar &rarr;</a>
                </div>
              </div>
            </div>
           </div>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Recursos Digitales</h5>
            <div class="card-body">
                <div class="form-group">
                   
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>Seleccione..</option>
                      <option>Base de datos de acceso Restringido</option>
                      <option>Base de datos de acceso libre</option>
                      <option>Revistas Electronicas</option>
                      <option>Bibliotecas Digitales</option>
                     
                    </select>
                  </div>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar recurso...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
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
                      <a href="#">Catalogo en Linea</a>
                    </li>
                    <li>
                      <a href="#">Solicitud de reservas</a>
                    </li>
                    <li>
                      <a href="#">Paz y salvo</a>
                    </li>
                  </ul>
                </div>
            
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->
      @endsection