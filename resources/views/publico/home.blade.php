<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biblioteca Unipacífico</title>

    <!-- Bootstrap core CSS -->
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="asset/css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    @include("fragments.menuprincipal");
   <!-- finnavigation-->

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('asset/img/demo.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Servicios de Biblioteca Unipacífico</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below 
        <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')"> -->
          <div class="carousel-item" style="background-image: url('asset/img/banner-biblioteca.png')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below 
           <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">-->
         
            <div class="carousel-item" style="background-image: url('asset/img/banner2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Agenda de eventos</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

    <h1 class="my-4 colortext">Bienvenidos a la Biblioteca Unipacífico</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Catalogo en Linea</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Recursos de Información</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="/recursos" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Biblioteca Digital</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="/bibliotecadigital" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
 
      <!-- Features Section -->
  <div class="row">
    <div class="col-lg-6">
      <h2>Modern Business Features</h2>
      <p>The Modern Business template by Start Bootstrap includes:</p>
      <ul>
        <li>
          <strong>Bootstrap v4</strong>
        </li>
        <li>jQuery</li>
        <li>Font Awesome</li>
        <li>Working contact form with validation</li>
        <li>Unstyled page elements for easy customization</li>
      </ul>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
    </div>
    <div class="col-lg-6">
      <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
    </div>
  </div>
  <!-- /.row -->

  <hr>
      <!-- Portfolio Section -->
    
      <div class="row"> 
            <div class="col-9">
                <h2>ACTUALIDAD</h2>

              <div class="row">
                @foreach($publicaciones as $publicacion)
                  <div class="card" style="width: 17.5rem; margin-right:3px;">
                  <img class="card-img-top" src="{{ $publicacion->img }}"  alt="Card image cap">
                      <div class="card-body">
                      <p class="card-text">{{ $publicacion->titulo }}</p>
                      </div>
                    </div>
                    @endforeach

                    
              </div>
            </div>
                   
       
        <!----------------------------------------------- menu de opciones-->

        <div class="col-3">
          @include('fragments.menu')
          
      </div>
    </div>
      <hr>
          <!-------- Features Section -->
  <div class="row">
    <div class="col-md-7">
      <h5>CALENDARIO DE EVENTOS</h5>
        
      <div class="list-group">
        @foreach($eventos as $evento)
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{$evento->titulo}}</h5>
            <small>3 days ago</small>
          </div>
          <p class="mb-1">{{$evento->contenido}}</p>
        </a>
        @endforeach
      </div>

      
    </div>
    
     

    <div class="col-md-5">
        <h5>HORARIO DE ATENCION</h5>
        <p>Dirección:
            Sede Principal
            Calle 12 No. 1-17 Este. Edificio E. Bogotá, Colombia</p>
            
          <p> Sede Derecho Constitucional CRP
            Calle 12 No. 2-94 Bogotá, Colombia</p>
            
          <p>Teléfonos:
            3419900 o 3537000, extensiones 3357 y 2051</p>
            
          <p> Horario de atención
            Lunes a viernes de 6:00 a.m. a 9:00 p.m.
            Sábados de 8:00 a.m. a 5:00 p.m.</p>
            
          <p>Servicios
            servicios.biblioteca@uexternado.edu.co</p>
    </div>

    </div>
    <!-- /.row -->
  
    <hr>

      <!-- Call to Action Section -->
      

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
