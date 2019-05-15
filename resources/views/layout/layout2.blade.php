<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biblioteca - @yield("titulo")</title>

    <!-- Bootstrap core CSS -->
  <link href="{{ url('/asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('/asset/css/modern-business.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    @yield('estilos')


  </head>

  <body>

    <!-- Navigation -->
    @include("../fragments.menuprincipal");
    <!--- finnavigation--->

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">@yield("titulo")</h1>

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Home</a>
          </li>
          <li class="breadcrumb-item active">@yield("titulo")</li>
        </ol>

          @yield('contenido')

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-footer mt-3">
        <div class="container">
                   <!-------- Features Section -->
    <div class="row">
      <div class="col-md-4 text-white">
        <img  class="float-left" src="{{url('asset/img/escudo.png')}}" alt="" width="80px">
         <h2 class="text-white">UNIVERSIDAD DEL PACIFICO</h2>
         
        <p> La Universidad del Pacífico es una institución de educación superior sujeta a inspección y vigilancia por el Ministerio de Educación Nacional.
          </p>
  
          Universidad del Pacífico - Buenaventura - Valle del Cauca - Colombia
  
  
          Km 13 vía al Aeropuerto Barrio el Triunfo Campus Universitario - PBX. (2) 2405555 - Cod. Postal: 764503 Email: info@unipacifico.edu.co
         
  
      </div>   
         
    
        <div class="col-md-4 text-white">
            <h2 class="">
                <i class="fas fa-university icono"></i>
                Medios Institucionales              
              </h2>
            
              <ul class="float-left">
                  <li><a href="http://www.unipacifico.edu.co:8095/web3.0/inicio.jsp" target="blank" class=" text-white">Unipacífico</a></li>
                  <li><a href="/" class=" text-white">Biblioteca</a></li>
                  <li><a href="http://www.unipacifico.edu.co:8095/web3.0/institucional.jsp?opt=21&opt2=pg" target="blank" class=" text-white">Bienestar</a></li>
                  <li><a href="http://egresados.unipacifico.edu.co:2201/site/index" target="blank" class=" text-white">Egresados</a></li>
                  <li><a href="/services" class=" text-white">Servicio</a></li>
                  <li><a href="/noticias" class=" text-white">Noticias</a></li>
                  <li><a href="/contacto" class=" text-white">Contactenos</a></li>
                </ul>
                <ul class="float-left mx-2 ">           
                   <li><a href="http://unipacifico.metabiblioteca.org/" target="blank" class=" text-white">Catálogo en Linea </a></li>
                <li><a href="/bibliotecadigital" class=" text-white">Bases de Datos</a></li>
                   <li><a href="/enlacesdeinteres/#repositorios" class=" text-white">Repositorio</a></li>
                   <li><a href="http://www.unipacifico.edu.co:8095/web3.0/inicio.jsp/#sistmasacademicos" target="blank" class=" text-white">Academusoft</a></li>
                   <li><a href="http://avas.unipacifico.edu.co/moodle/index.php" target="blank" class=" text-white"> Avast</a></li>
                 </ul>
        </div>
    
  
  
        <div class="col-md-4 text-white">
            <h2 class="">
                <i class="fas fa-user-clock"></i>
                HORARIO DE ATENCION
               
              </h2>
              <dt>Biblioteca del Campus Universitario:</dt>
              <dd class="col-sm-9">Lunes a Viernes de 7:00 A.M. a 8:30 P.M. y Sábados de 8:00 A.M. a 2:00 P.M.</dd>
  
              <dt> Biblioteca Ciudadela Colpuertos:</dt>
              <dd> Lunes a Viernes 8:00 A.M. a 12:00 P.M.- 2:00 P.M. a 9:00 P.M y Sábados de 8:00 A.M. a 2:00 P.M.</dd>
            
        </div>
        
        
        <!-- /.container -->
      </footer>
      

    <!-- Bootstrap core JavaScript -->
  <script src="{{url('/asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('/asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  @yield('script')
  </body>

</html>
