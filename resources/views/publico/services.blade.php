
@extends('layout.layout2')

@section('titulo','Servicios Bibliotecario')
    

@section('contenido')
    

      <!-- Image Header -->
      <!--<img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">  <img class="img-fluid rounded mb-4" src="/asset/img/servicio.png"  alt=""> -->
     
      <!-- Marketing Icons Section -->
      <div class="row">

         
              <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-interno-tab" data-toggle="pill" href="#v-pills-interno" role="tab" aria-controls="v-pills-interno" aria-selected="false">Prestamo Internos</a>
                  <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Prestamos Externos</a>
                  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Prestamo Interbiblioteca</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Prestamo PC para Consulta en Internet</a>
                  <a class="nav-link" id="v-pills-ayudas-tab" data-toggle="pill" href="#v-pills-ayudas" role="tab" aria-controls="v-pills-messages" aria-selected="false">Préstamos de ayudas tecnológicas</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-ayudadidactica" role="tab" aria-controls="v-pills-messages" aria-selected="false">Préstamos de ayudas didácticas</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-cubiculos" role="tab" aria-controls="v-pills-messages" aria-selected="false">Préstamos   de cubículos</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-videoteca" role="tab" aria-controls="v-pills-messages" aria-selected="false">Préstamos de videoteca</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-diseminacion" role="tab" aria-controls="v-pills-messages" aria-selected="false">Diseminación Selectiva de Información</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-referencia" role="tab" aria-controls="v-pills-messages" aria-selected="false">Referencia personalizada</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-formacion" role="tab" aria-controls="v-pills-messages" aria-selected="false">Formación a usuarios</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-cultural" role="tab" aria-controls="v-pills-messages" aria-selected="false">Actividades culturales y de promoción lectora</a>
                 
                
                </div>
              </div>
              <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-interno" role="tabpanel" aria-labelledby="v-pills-interno-tab">
                        <h4><strong>Préstamo Interno</strong></h4>
                        <p>
                            Es un servicio que busca extender el acceso a las colecciones de la Biblioteca y fortalecer los procesos de lectura entre la comunidad, a través del préstamo de materiales al interior de las instalaciones de la Universidad. En este servicio entran todas las colecciones,  pueden acceder usuarios internos como externos.

                        </p>
                    </div>
                  <div class="tab-pane fade show " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <h4><strong>Préstamo externo </strong></h4>
                      <p>
                        Es un servicio que busca extender el acceso a las colecciones de la Biblioteca y fortalecer los procesos de lectura entre la comunidad, a través del préstamo de materiales fuera de las instalaciones de la Universidad. Con excepción de la  colecciones especiales y/o reservas. 
                      </p>
                  </div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <h1>Préstamo interbibliotecario</h1>
                    <p>
                        Es el servicio por el cual usted podrá acceder al material bibliográfico que no se encuentra disponible en el sistema integrado de la Biblioteca, pero se encuentra disponible en otra biblioteca con convenio vigente.                     </p>

                    <p>Para solicitar un préstamo interbibliotecario, descargue el siguiente formato: <a href="asset/documentos/Plantilla Prestamos interbibliotecarios.xlsx">Solicitud préstamo interbibliotecario</a> </p>

                    </div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <h1>Préstamo de PCs para consulta en internet</h1>
            
                      <meta http-equiv="content-type" content="text/html; charset=utf-8">
                      
                      <p>Permite acceder a los servicios de información electrónicos y/o digitales que posee la Biblioteca, de igual forma le admite a los usuarios realizar sus trabajos parciales o consultas de temas de interés.    </p>
                  </div>

                  <div class="tab-pane fade" id="v-pills-ayudas" role="tabpanel" aria-labelledby="v-pills-ayudas-tab">
                    <h1>Préstamos de ayudas tecnológicas</h1>
          
                    <meta http-equiv="content-type" content="text/html; charset=utf-8">
                    
                    <p>
                        Son herramientas de amplificación de los servicios que le ofrece la Biblioteca,  para contribuir en el mejoramiento de su proceso autónomo y colaborativo de aprendizaje, hacen parte de estas herramientas préstamos de auriculares, gafas en 3D y otros.                     </p>
                </div>

                <div class="tab-pane fade" id="v-pills-ayudadidactica" role="tabpanel" aria-labelledby="v-pills-ayudas-tab">
                  <h1>Préstamos de ayudas Didactica</h1>
        
                  <meta http-equiv="content-type" content="text/html; charset=utf-8">
                  <p>
                    Son aquellos juegos mentales, deportes intelectuales, herramientas pedagógicas y artísticas que hacen parte del proceso de formación integral de los educandos y la comunidad académica.                   </p>

                </div>


              <div class="tab-pane fade" id="v-pills-cubiculos" role="tabpanel" aria-labelledby="v-pills-ayudas-tab">
                <h1>Préstamos de Cubiculos</h1>
      
                <meta http-equiv="content-type" content="text/html; charset=utf-8">
                <p>
                    Son espacios individuales en los que el usuario puede estudiar y realizar diferentes trabajos académicos, sin interrupciones, con una solicitud mínima de 2 personas y una máxima de 4 personas por dos horas, o según la necesidad del servicio, en el momento del préstamo dentro de los horarios establecidos en la Biblioteca.                 </p>
            </div>

            <div class="tab-pane fade" id="v-pills-videoteca" role="tabpanel" aria-labelledby="v-pills-ayudas-tab">
              <h1>Préstamos de Videoteca</h1>
    
              <meta http-equiv="content-type" content="text/html; charset=utf-8">
                <p>
                    Es el servicio por el cual el usuario puede acceder al préstamo de una sala dotada con la tecnología y los recursos necesarios, para disfrutar de películas y demás materiales audiovisuales disponibles en las colecciones de la Biblioteca. Ideal para reuniones o ensayar actividades pendientes  con menos de 25 personas. Requiere de reserva, y el tiempo de servicio varía acorde a la necesidad de la solicitud.                 </p> 
                
                <p>
                    Para realizar una reserva de este espacio, puede hacerlo a través del siguiente formulario: <a href="https://forms.gle/A1oc1uieVMoXup4V8">Reserva de Videoteca</a>
                </p>

          </div>

          <div class="tab-pane fade" id="v-pills-diseminacion" role="tabpanel" aria-labelledby="v-pills-ayudas-tab">
              <h1>Diseminación Selectiva de Informacióna</h1>
    
              <meta http-equiv="content-type" content="text/html; charset=utf-8">
                <p>
                    Servicio que presta la Biblioteca a la comunidad académica y en especial a los investigadores y tesistas, con el fin de ayudarles a localizar información académica en áreas del conocimiento de su interés investigativo, este servicio se atiende con solicitud previa                </p>
          </div>

          <div class="tab-pane fade" id="v-pills-referencia" role="tabpanel" aria-labelledby="v-pills-ayudas-tab">
            <h1>Referencia Personalizada</h1>
  
            <meta http-equiv="content-type" content="text/html; charset=utf-8">
            
            <p>
                Si usted es un estudiante o docente que por diferentes razones no ha tenido la oportunidad de acercarse a la Biblioteca y conocer sus servicios, en el momento que ingrese a los espacios, puede contar con la presencia de un referencista que le orienta en el uso de los servicios, manejo de bases de datos y equipos.

            </p>
        </div>

        <div class="tab-pane fade" id="v-pills-formacion" role="tabpanel" aria-labelledby="v-pills-ayudas-tab">
          <h1>Formación a usuarios</h1>

          <meta http-equiv="content-type" content="text/html; charset=utf-8">
          <p>
              Servicio que le brinda la posibilidad de mejorar su conocimiento general sobre los servicios que ofrece la  biblioteca y cómo funcionan éstos.  De igual forma, brinda alternativa para que el usuario  construya  las  herramientas necesarias  para  mejorar  su competencia académica. En esta modalidad se ofertan cursos y talleres para que la vida académica sea más loable. 
          </p>
          <p>
              Para solicitar capacitaciones, puedes hacerlo desde el sigueinte formulario: <a href="https://forms.gle/LRdH8FZFqnr8haRs5">Solicitud formación a usuario</a>

          </p>
      </div>

      <div class="tab-pane fade" id="v-pills-cultural" role="tabpanel" aria-labelledby="v-pills-ayudas-tab">
        <h1>Actividades culturales y de promoción lectora</h1>

        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        
          <p>
            También llamadas Actividades extracurriculares, entendidas como toda actividad que se realizan fuera del horario académico y forman un segmento muy importante en la vida universitaria, puesto que le permiten descubrir o afianzar talentos, las cuales recorren una gama de diversas actividades culturales, hasta llegar a tener encuentros directos con el autor o artista productor, cada actividad tiene el propósito  que la comunidad académica cuente con diversas formas de vivir y sentir su estadía en la Universidad.           </p>
      </div>
       
    </div>
<h4> <strong>Condiciones de uso de los servicios de la Biblioteca</strong> </h4>
    
<ul>
 <li>Tener la  necesidad y/o curiosidad del servicio.</li>
 <li>Estar a paz y salvo con la Biblioteca y con las otras instituciones con las cuales se tiene convenio de Préstamo Interbibliotecario.</li>
 <li>Solicitarlo personalmente  en el área de  circulación y préstamo y/o vía correo electrónico a la direccion <strong> biblioteca@unipacifico.edu.co</strong> .</li>
 <li>Presentar  su carné institucional vigente que lo acredite como miembro de la comunidad universitaria, institución educativa o investigación que lo respalde. </li>
 <li>Las  colecciones  especiales no están disponibles para  la casa. </li>
 <li>Devolver el material prestado acorde al tiempo que se le indicó,  durante  el préstamo.</li>
 <li>	Ser  respetuoso  al momento de solicitar cualquier  servicio en la Biblioteca.</li>
</ul>
   

    </div>
          

        <!--<div class="col-lg-4 mb-4">
          <ul class="list-group">
            <li class="list-group-item active">Prestamos</li>
            <li class="list-group-item nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"></li>
            <li class="list-group-item nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Prestamo Interbiblioteca</li>
            <li class="list-group-item">Prestamo PC para Consulta en Internet</li>
            <li class="list-group-item">Prestamo Audifonos</li>
            <li class="list-group-item">Salas de Estudios</li>
            <li class="list-group-item">Videoteca</li>
            
          </ul>
        </div>-->

        <div class="col-lg-8 mb-8">
           
       </div>
    
      </div>
      <!-- /.row -->

 @endsection  