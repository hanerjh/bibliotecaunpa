
@extends('layout.layout2')

@section('titulo','Biblioteca')
@section('contenido')   

      
      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
            <img class="img-fluid rounded mb-4" src="asset/img/biblio.JPG" alt="">
          <!--<img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">-->
        </div>
        <div class="col-lg-6">
          
          
          <p> 
            La Biblioteca de la Universidad del Pacífico es una unidad de información que apoya los procesos misionales del Alma Máter, ayuda a construir métodos de formación integral a los estudiantes desde la academia y brinda una gama de recursos de información, tanto físicos como digitales.  Desde la formación cultural y lectora, propone una apuesta de incentivo por la lectura a estudiantes y docentes -la lectura como alternativa académica y de ocio-, todo esto articulado al desarrollo o avances tecnológicos que van ligados con las labores de estímulo del aprendizaje como nuevos escenarios de retos y oportunidades.
            </p> 
            <p>
          La Biblioteca se perfila a futuro o a mediano plazo como una unidad de información para el aprendizaje y la investigación que puede brindar servicios a toda la población que lo requiera.
            </p>
        
        </div>
        <div class="col-lg-12">
          <h2> Misión</h2>
          <p>
              La Biblioteca de la Universidad del Pacífico tiene como misión seleccionar, adquirir, organizar y recuperar información científica y de interés general.  Además de promover y facilitar el acceso a la información en forma eficiente y eficaz, para fortalecer las actividades de investigación, docencia y extensión, mediante una adecuada combinación de gestión gerencial y recursos tecnológicos. 
          </p>

          <h2>Visón</h2>
          <p> 
              La Biblioteca de la Universidad del Pacífico estará comprometida con la comunidad universitaria para brindar servicios eficientes,  de acuerdo con las exigencias del medio.
              Será la unidad de información más moderna de la Región del Pacífico colombiano, con una estructura organizacional ágil y flexible que incorporará la automatización en sus procesos, con un equipo humano multidisciplinario, administrador, procesador, generador y difusor de la información.
              Como unidad de información de primer orden, estará al servicio de la sociedad y participará activamente en la formación integral de la comunidad, propiciando espacios para la difusión de valores históricos, humanísticos y culturales, que  contribuyan en la generación de  profesionales íntegros.
                            </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2>Colecciones</h2>

      <div class="row">
        @foreach ($colecciones as $coleccion)

        <div class="col-lg-3 mb-3" >
            <div class="card h-100 text-center" style="border-top:3px solid #5e7b6d">
              <!--<img class="card-img-top" src="http://placehold.it/750x450" alt="">-->
             
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
    