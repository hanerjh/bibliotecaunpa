<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biblioteca Unipacífico</title>

    <!-- Bootstrap core CSS
     <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="asset/css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- grid gallery style -->
    <link href="asset/gridgallery/css/MetroJs.css" rel="stylesheet" type="text/css" media="screen">
    <!-- da la animacion de la galeria central-->
    <link href="asset/gridgallery/css/dialog.css" rel="stylesheet" type="text/css" media="screen">
    <!-- ventana emergente -->
    <link href="asset/gridgallery/css/dialog-sandra.css" rel="stylesheet" type="text/css" media="screen">
    <!-- datos de ventana emergente -->
    <link href="asset/gridgallery/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link class="main-stylesheet" href="asset/gridgallery/css/pages.css" rel="stylesheet" type="text/css">
    <!-- crea los grid slider gallery -->

</head>

<body>

    <!-- Navigation -->
    @include("fragments.menuprincipal");
    <!-- finnavigation-->

    <header>
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                @php
                $cont=0;
                @endphp

                @foreach($banners as $banner)
                @if($cont==0)
                <div class="carousel-item active" style="background-image: url('/storage/asset/img/banner/{{$banner->img}}')">
                    <div class="carousel-caption d-none d-md-block">
                      
                    </div>
                </div>
                @else
                <div class="carousel-item" style="background-image: url('/storage/asset/img/banner/{{$banner->img}}')">
                    <div class="carousel-caption d-none d-md-block">
                       
                    </div>
                </div>
                @endif
                @php
                $cont++;
                @endphp
                @endforeach
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
                    <h4 class="card-header">Catálogo en Linea</h4>
                    <div class="card-body">
                        <p class="card-text">CConsulte todo el acervo bibliográfico disponible en la biblioteca, a
                            través del catálogo público de acceso en línea.</p>
                    </div>
                    <div class="card-footer">
                        <a href="http://unipacifico.metabiblioteca.org/" class="btn  bg-green text-white"
                            target="blank">Ir a catálogo</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Recursos de Información</h4>
                    <div class="card-body">
                        <p class="card-text">Conoce más sobre los recursos de información disponibles en la biblioteca.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="/recursos" class="btn bg-dark text-white">Ir a Recursos</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Biblioteca Digital</h4>
                    <div class="card-body">
                        <p class="card-text">Explora los recursos digitales que posee la biblioteca como son: Bases de
                            Datos, Revistas electrónicas, Repositorios, entre otras; que te ayudarán en la búsqueda de
                            información académica, científica e investigativa. </p>
                    </div>
                    <div class="card-footer">
                        <a href="/bibliotecadigital" class="btn bg-green text-white">Ir a Biblioteca</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- Features Section -->
    <div class="container-fluid barranumberloadpadre ">
        <div class="row">
            <div class="container">
                <div class="row  barranumberload" id="facts-area">

                    <div class="col-3">
                        <i class="fas fa-book fa-3x iconos float-left"></i>
                        <span>
                            <h4 class="ctitle font-weight-bold">TITULOS</h4>
                            @if(isset($datos))
                            <h2 class="counter">{{$datos[0][0]}}</h2>
                            @else
                             <h2 class="counter">0</h2>
                            @endif

                        </span>
                    </div>

                    <div class="col-3 ">
                        <i class="fas fa-copy fa-3x iconos float-left"></i>
                        <span>
                            <h4 class="ctitle font-weight-bold">EJEMPLARES</h4>
                            @if(isset($datos))
                            <h2 class="counter">{{$datos[0][1]}}</h2>
                            @else
                             <h2 class="counter">0</h2>
                            @endif
                        </span>
                    </div>

                    <div class="col-3 ">
                        <i class="fas fa-book-open fa-3x iconos float-left"></i>
                        <span>
                            <h4 class="ctitle font-weight-bold">REVISTAS</h4>
                            @if(isset($revistas))
                            <h2 class="counter">{{$revistas[0][0]}}</h2>
                            @else
                             <h2 class="counter">0</h2>
                            @endif
                        </span>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- /.row -->

        <hr>
        <!-- GRID GALLERY -->

        <div class="row">
            <div class="col-12">
                <h4><i class="fas fa-bullhorn"></i> PUBLICACIONES</h4>
            </div>

            <div class="col-md-8">
                <!-- PASAMOS LOS DATOS AL PARTIALS GALLERY PARA PROCESAR-->
                @include("fragments.gridgallery", ['page_title' => $publicaciones])
            </div>


            <!----------------------------------------------- menu de opciones-->

            <div class="col-md-4">
                @include('fragments.menu')


                <h5 class="mt-3 py-3 pl-2 ">
                    <i class="fas fa-calendar-alt"></i>
                    Nuestra Agenda
                    <small class="text-muted">Eventos</small>
                </h5>




                <div class="list-group">

                    @foreach($eventos as $evento)
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start event-item" data-id="{{$evento->id}}">

                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1" style="color:#ac8714">{{ strtoupper($evento->titulo) }}</h6>

                        </div>
                        <small class="text"><strong>Fecha del evento:
                                {{Carbon\Carbon::parse($evento->fecha_cierre)-> format('M j, Y')}}</strong></small>
                        <br>
                        <!--<small>{!! str_limit($evento->contenido,80) !!} </small>-->
                        <span
                            class="pull-right rounded semi-bold text-black bg-success px-2 font-montserrat bg-tag bold ">
                            <small>{{$evento->tipo_evento}}</small>
                        </span>
                    </a>

                    <!-- item event pop over -->
                    <div id="itemDetails{{$evento->id}}" class="dialog item-details">
                        <div class="dialog__overlay"></div>
                        <div class="dialog__content">
                            <div class="container-fluid">
                                <div class="row dialog__overview">
                                    <div class="col-md-6 no-padding item-slideshow-wrapper full-height">
                                        <div class="item-slideshow full-height ">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage"
                                                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 984px;">
                                                    <div class="owl-item active" style="width: 491.75px;">
                                                        <div class="slide" data-image=""
                                                            style="background-image: url(&quot;/storage/asset/img/eventos/{{$evento->img}}&quot;); background-size:cover;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-r-35 p-t-35 p-l-35 full-height item-description">
                                        <h6 class="semi-bold no-margin font-montserrat">{{ strtoupper($evento->titulo)}}</h6>
                                        <br>
                                        <div style="overflow:auto;  height: 300px;">
                                                <p class="fs-13">
                                                        {!!$evento->contenido!!} 
                                                    </p>
                                        </div>
                                       

                                        <br>
                                        <a href="eventos" class="btn btn-primary buy-now">Ver más eventos</a>
                                    </div>
                                </div>

                            </div>
                            <button class="close action top-right" data-dialog-close=""><i class="pg-close fs-14"></i>
                            </button>
                        </div>
                    </div>
                    <!-- End item  event pop over -->
                    @endforeach
                </div>
                <div class="pull-right mt-2">
                    <a href="/eventos" class="text-decoration-none"><i class="fas fa-plus-square text-black"></i> Ver
                        más eventos</a>
                </div>

            </div>
        </div>
        <br>






        <!-- Call to Action Section -->


    </div>
    <!-- /.container -->

    <!-- seccion de nuevos titulos-->

    <!-- Start brands Area -->

    <div class="wp-titulos">
        <div class="container">
            <h2 class=" py-2  ">
                <a href="/nuevasadquisiciones">
                    <i class="fas fa-book-reader"></i>
                    Nuevas
                    <small class="text-muted">Adquisiciones</small> </h2>
            </a>
        </div>

        <section class="brands-area">
            <div class="container-fluid">
                <div class="brand-wrap my-5">
                    <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                     @isset($covers)
                        @forelse ($covers as $cover)
                        <div class="col single-brand">
                            <a href="http://unipacifico.metabiblioteca.org/cgi-bin/koha/opac-detail.pl?biblionumber={{$cover[0]}}"
                                target="blank" data-toggle="tooltip" data-placement="top" title="{{$cover[1]}}"><img
                                    class="mx-auto "
                                    src="http://unipacifico.metabiblioteca.org/cgi-bin/koha/opac-image.pl?thumbnail=1&biblionumber={{$cover[0]}}"
                                    alt="{{$cover[1]}}"></a>
                            <!--<small class="text-white">{{$cover[1]}}</small>-->
                        </div>
                        @empty
                           <p>No hay conexión</p>
                        @endforelse
                    @endisset
                    </div>
                </div>
            </div>

        </section>


    </div>



    <!-- fin seccion de nuevos titulos-->

    <!-- Footer -->
    <footer class="py-5 bg-footer mt-3">
        <div class="container">
            <!-------- Features Section -->
            <div class="row">
                <div class="col-md-4 text-white">
                    <img class="float-left" src="asset/img/escudo.png" alt="" width="80px">
                    <h2 class="text-white">UNIVERSIDAD DEL PACÍFICO</h2>

                    <p>
                        La Universidad del Pacífico es una institución de educación superior sujeta a inspección y
                        vigilancia por el Ministerio de Educación Nacional.
                    </p>

                    Universidad del Pacífico - Buenaventura - Valle del Cauca - Colombia


                    Km 13 vía al Aeropuerto Barrio el Triunfo Campus Universitario - PBX. (2) 2405555 - Cod. Postal:
                    764503 Email: info@unipacifico.edu.co


                </div>


                <div class="col-md-4 text-white">
                    <h2 class="">
                        <i class="fas fa-university icono"></i>
                        Medios Institucionales
                    </h2>

                    <ul class="float-left">
                        <li><a href="http://www.unipacifico.edu.co:8095/web3.0/inicio.jsp" target="blank"
                                class=" text-white">Unipacífico</a></li>
                        <li><a href="/" class=" text-white">Biblioteca</a></li>
                        <li><a href="http://www.unipacifico.edu.co:8095/web3.0/institucional.jsp?opt=21&opt2=pg"
                                target="blank" class=" text-white">Bienestar</a></li>
                        <li><a href="http://egresados.unipacifico.edu.co:2201/site/index" target="blank"
                                class=" text-white">Egresados</a></li>
                        <li><a href="/services" class=" text-white">Servicios</a></li>
                        <li><a href="/noticias" class=" text-white">Noticias</a></li>
                        <li><a href="/contacto" class=" text-white">Contactenos</a></li>
                    </ul>
                    <ul class="float-left mx-2 ">
                        <li><a href="http://unipacifico.metabiblioteca.org/" target="blank" class=" text-white">Catálogo
                                en Linea </a></li>
                        <li><a href="/bibliotecadigital" class=" text-white">Bases de Datos</a></li>
                        <li><a href="/enlacesdeinteres/#repositorios" class=" text-white">Repositorio</a></li>
                        <li><a href="http://www.unipacifico.edu.co:8095/web3.0/inicio.jsp/#sistmasacademicos"
                                target="blank" class=" text-white">Academusoft</a></li>
                        <li><a href="http://avas.unipacifico.edu.co/moodle/index.php" target="blank"
                                class=" text-white"> Avas</a></li>
                        <li><a href="http://www.unipacifico.edu.co:8095/web3.0/institucional.jsp?opt=65&opt2=pg"
                                target="blank" class=" text-white"> Canal Yubarta</a></li>
                        <li><a href="http://www.unipacifico.edu.co:8095/web3.0/emisora/index.html" target="blank"
                                class=" text-white">Unipacífico Estéreo</a></li>
                    </ul>
                </div>



                <div class="col-md-4 text-white">
                    <h2 class="">
                        <i class="fas fa-user-clock"></i>
                        HORARIO DE ATENCIÓN

                    </h2>
                    <dt>Biblioteca del Campus Universitario:</dt>
                    <dd class="col-sm-9">Lunes a Viernes de 7:00 A.M. a 8:30 P.M. y Sábados de 8:00 A.M. a 2:00 P.M.
                    </dd>

                    <dt> Biblioteca Ciudadela Colpuertos:</dt>
                    <dd> Lunes a Viernes 8:00 A.M. a 12:00 P.M.- 2:00 P.M. a 9:00 P.M, Sábados de 8:00 A.M. a 2:00 P.M.
                    </dd>

                </div>


                <!-- /.container -->
    </footer>




    <!-- Bootstrap core JavaScript -->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- grid gallery jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    <script src="asset/gridgallery/js/jquery-3.2.1.min.js.descarga" type="text/javascript"></script>
    <script src="asset/gridgallery/js/jquery-2.2.4.min.js"></script>
    <script src="asset/gridgallery/js/modernizr.custom.js.descarga" type="text/javascript"></script><!-- 1 -->
    <!-- <script src="js/jquery-ui.min.js.descarga" type="text/javascript"></script>-->
    <script type="text/javascript" src="asset/gridgallery/js/classie.js.descarga"></script>
    <!--2-->
    <script src="asset/gridgallery/js/MetroJs.min.js.descarga" type="text/javascript"></script>
    <!--3-->
    <script src="asset/gridgallery/js/imagesloaded.pkgd.min.js.descarga"></script>
    <!--4-->
    <script src="asset/gridgallery/js/dialogFx.js.descarga" type="text/javascript"></script>
    <!--5-->
    <script src="asset/gridgallery/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="asset/gridgallery/js/isotope.pkgd.min.js.descarga" type="text/javascript"></script>
    <script src="asset/gridgallery/js/waypoints.min.js"></script>
    <script src="asset/gridgallery/js/jquery.counterup.min.js"></script>
    <script src="asset/gridgallery/js/gallery.js" type="text/javascript"></script>
    <!--6-->


</body>

</html>
