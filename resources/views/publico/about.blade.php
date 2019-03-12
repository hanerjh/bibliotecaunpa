
@extends('layout.layout2')

@section('titulo','Biblioteca')
@section('contenido')   

      
      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
            <img class="img-fluid rounded mb-4" src="img/biblio.JPG" alt="">
          <!--<img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">-->
        </div>
        <div class="col-lg-6">
          <h2>Biblioteca Unipacifico</h2>
          <p>La Biblioteca es una dependencia adscrita a la Dirección Académica
              encargada de seleccionar, adquirir, organizar y entregar información en
              sitio y remota, a todos los usuarios de la Universidad.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>
        <div class="col-lg-12">
          <h2> Misión</h2>
          <p>
           La biblioteca de la Universidad del Pacífico tiene como Misión: seleccionar, adquirir, organizar y recupera información científica y técnica además de promover y facilitar el acceso a la información en forma eficiente y eficaz, para fortalecer las actividades de investigación, docencia y extensión, mediante una adecuada combinación de gestión gerencial y recursos tecnológicos.
          </p>

          <h2>Visón</h2>
          <p> 
            Biblioteca de la Universidad del Pacífico estará comprometida con la comunidad universitaria para brindar servicios eficientes de acuerdo con las exigencias del medio.
              Será la unidad de información más moderna de la región, con una estructura organizacional ágil y flexible que incorporará la automatización en sus procesos, con un equipo humano multidisciplinario, administrador, procesador, generador y difusor de la información.
              Como centre universitario de primer orden estará al servicio de la sociedad y participara activamente en la formación integral de la comunidad, propiciando espacios para la difusión de valores históricos, humanísticos y culturales.
           </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2>Colecciones</h2>

      <div class="row">
        @foreach ($colecciones as $coleccion)

        <div class="col-lg-3 mb-3">
            <div class="card h-100 text-center">
              <img class="card-img-top" src="http://placehold.it/750x450" alt="">
              <div class="card-body">
              <h4 class="card-title">{{$coleccion->coleccion}}</h4>
                <h6 class="card-subtitle mb-2 text-muted">Biblioteca Unipacífico</h6>
                <p class="card-text"></p>
              </div>
              
            </div>
          </div>
            
        @endforeach
      
        

      </div>
      <!-- /.row -->

      
      @endsection
    