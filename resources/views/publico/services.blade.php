
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
                  <a class="nav-link" id="v-pills-sala-tab" data-toggle="pill" href="#v-pills-sala" role="tab" aria-controls="v-pills-sala" aria-selected="false">Salas de Estudios</a>
                  <a class="nav-link" id="v-pills-videoteca-tab" data-toggle="pill" href="#v-pills-videoteca" role="tab" aria-controls="v-pills-videoteca" aria-selected="false">Videoteca</a>
                
                
                </div>
              </div>
              <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-interno" role="tabpanel" aria-labelledby="v-pills-interno-tab">
                        <h4><strong>Préstamo Interno</strong></h4>
                        <h5>¿Qué es?</h5>
                          <p>Es un servicio que busca extender el acceso a las colecciones de la Biblioteca y fortalecer los procesos de lectura entre la comunidad, a través del préstamo de materiales al inetrior de las instalaciones de la Universidad.
                          </p>
                    <h5>¿Quién puede acceder?</h5>
                    <p>Estudiantes, egresados, personal administrativo, docentes, investigadores y tesistas autorizados por la respectiva Facultad.
                    </p>
                    
                    <h5>¿Requisitos?</h5>
                    <ul>
                      <li>Solicitarlo personalmente en el área de préstamo y devolución de libros de la Biblioteca.</li>
                      <li>Contar con carné institucional vigente que lo acredite como miembro de la Comunidad Externadista.</li>
                      <li>Estar registrado y activo como usuario en el sistema de la Biblioteca. No tener multas ni sanciones activas.</li>
                    </ul>
                    
                    <h5>¿Condiciones?</h5>
                    
                    <p>Los materiales de las colecciones de referencia, reserva, publicaciones de la Universidad Externado, tesis de grado, piezas audiovisuales, periódicos, revistas y libros ubicados en la sala Fernando Hinestrosa no tendrán préstamo externo.
                    </p>
                    <p>
                      El usuario podrá llevar en préstamo externo hasta cuatro materiales, un solo ejemplar por título y por los términos que aquí se establecen:
                    
                    </p>
                    <ul>
                      <li>Estudiantes de pregrado, trabajadores administrativos, egresados e instituciones con convenio vigente, siete días calendario.
                      </li>
                      <li>Estudiantes de posgrado, docentes e investigadores, treinta días calendario.
                      </li>
                    </ul>
                    </div>
                  <div class="tab-pane fade show " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <h4><strong>Préstamo externo </strong></h4>
                      <h5>¿Qué es?</h5>
                        <p>Es un servicio que busca extender el acceso a las colecciones de la Biblioteca y fortalecer los procesos de lectura entre la comunidad, a través del préstamo de materiales fuera de las instalaciones de la Universidad.
                        </p>
                  <h5>¿Quién puede acceder?</h5>
                  <p>Estudiantes, egresados, personal administrativo, docentes, investigadores y tesistas autorizados por la respectiva Facultad.
                  </p>
                  
                  <h5>¿Requisitos?</h5>
                  <ul>
                    <li>Solicitarlo personalmente en el área de préstamo y devolución de libros de la Biblioteca.</li>
                    <li>Contar con carné institucional vigente que lo acredite como miembro de la Comunidad Externadista.</li>
                    <li>Estar registrado y activo como usuario en el sistema de la Biblioteca. No tener multas ni sanciones activas.</li>
                  </ul>
                  
                  <h5>¿Condiciones?</h5>
                  
                  <p>Los materiales de las colecciones de referencia, reserva, publicaciones de la Universidad Externado, tesis de grado, piezas audiovisuales, periódicos, revistas y libros ubicados en la sala Fernando Hinestrosa no tendrán préstamo externo.
                  </p>
                  <p>
                    El usuario podrá llevar en préstamo externo hasta cuatro materiales, un solo ejemplar por título y por los términos que aquí se establecen:
                  
                  </p>
                  <ul>
                    <li>Estudiantes de pregrado, trabajadores administrativos, egresados e instituciones con convenio vigente, siete días calendario.
                    </li>
                    <li>Estudiantes de posgrado, docentes e investigadores, treinta días calendario.
                    </li>
                  </ul>
                  </div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <h1>Préstamo interbibliotecario</h1>
            
                    
                      
                      <h4><strong>¿Qué es?</strong></h4>
                      <p>Es el servicio por el cual usted podrá acceder al material bibliográfico que no se encuentra disponible en el sistema integrado de la Biblioteca y, en cambio, sí se encuentra disponible en otra Biblioteca con convenio vigente.</p>
                      <h4><strong>¿Quién puede acceder?</strong></h4>
                      <p>Estudiantes, personal administrativo, docentes, investigadores o tesistas autorizados por la respectiva facultad.</p>
                      <h4><strong>¿Requisitos?</strong></h4>
                      <ul>
                      <li>
                      <a href="http://catalogo.uexternado.edu.co/uhtbin/cgisirsi/x/0/x/29/1167/X/1">Estar registrado y activo</a> como usuario en el sistema de la Biblioteca. No tener multas ni sanciones vigentes.</li>
                      <li>Contar con carné institucional vigente que lo acredite como miembro de la Comunidad Externadista.</li>
                      </ul>
                      <h4><strong>¿Cómo se solicita el servicio?</strong></h4>
                      <p>Antes de realizar la solicitud verifique previamente la disponibilidad del material bibliográfico en el catálogo de la Biblioteca correspondiente. Si usted cumple los requisitos y verificó la disponibilidad del material, diligencie completamente la <a href="https://uexternadoedu-my.sharepoint.com/personal/prestamo_biblioteca_uexternado_edu_co/_layouts/15/WopiFrame.aspx?guestaccesstoken=P2Z12HJEy7U%2b4WPdDfuOeYbDYBHRXvZrp%2b5U3EHv2AI%3d&amp;docid=1_1cd244501285b46979b531d95b3a1f649&amp;wdFormId=%7BF667D1BB-8BC2-43A3-B47B-65CC510F1DE0%7D&amp;action=formsubmit">Solicitud de Préstamo Interbibliotecario</a>.</p>
                      <h4>
                      <strong>&nbsp;</strong><strong>¿Cómo puedo consultar el estado de mi solicitud?</strong>
                      </h4>
                      <p>20 minutos después de haber diligenciado la solicitud, puede consultar el estado a través del correo electrónico registrado. Si su solicitud ha sido aprobada diríjase al lugar que seleccionó para recoger su solicitud y se le entregará el formato establecido para solicitar el material en la institución correspondiente.</p>
                  </div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <h1>Préstamo de portátiles</h1>
            
                      <meta http-equiv="content-type" content="text/html; charset=utf-8">
                      
                      <h4><strong>¿Qué es?</strong></h4>
                      <p>Es el servicio por el cual usted podrá acceder al préstamo de portátiles dentro de las instalaciones de la Biblioteca, facilitándole el acceso a la información virtual y brindándole una herramienta que le apoye en sus actividades académicas.</p>
                      <h4><strong>¿Quién puede acceder?</strong></h4>
                      <p>Estudiantes, docentes e investigadores con vinculación vigente y tesistas autorizados por la respectiva Facultad.</p>
                      <h4><strong>¿Requisitos?</strong></h4>
                      <ul>
                      <li>
                      <a href="http://catalogo.uexternado.edu.co/uhtbin/cgisirsi/x/0/x/29/1167/X/1">Estar registrado y activo</a> como usuario en el sistema de la Biblioteca.</li>
                      <li>Contar con carné institucional vigente.</li>
                      <li>No tener multas ni sanciones activas.</li>
                      <li>El uso de los equipos está limitado a las instalaciones de la Biblioteca.</li>
                      </ul>
                      <h4><strong>¿Cómo se solicita el servicio?</strong></h4>
                      <ul>
                      <li>El préstamo de los equipos está sujeto a la disponibilidad de los mismos.</li>
                      <li>Entregar al funcionario responsable el carné y reclamarlo cuando retorne el portátil en óptimas condiciones.</li>
                      <li>Diligenciar y firmar los formatos que le entreguen los funcionarios de la Biblioteca.</li>
                      <li>El tiempo máximo de asignación será de 2 horas. Cumplido este tiempo, el usuario responsable tendrá que dirigirse al área de préstamo y devolución de equipos y devolverlo.</li>
                      </ul>
                  </div>
                  <div class="tab-pane fade" id="v-pills-sala" role="tabpanel" aria-labelledby="v-pills-sala-tab">

                      <h1>Salas de estudio</h1>
            
                      
                      <h4><strong>¿Qué es?</strong></h4>
                      <p>Es el servicio por el cual usted podrá acceder al préstamo de salas de estudio, dotadas con la tecnología y los recursos necesarios para desarrollar las diferentes actividades de formación y de esparcimiento cultural.</p>
                      <h4><strong>¿Quién puede acceder?</strong></h4>
                      <p>Estudiantes, egresados, docentes, investigadores, tesistas o personal administrativo de la Universidad.</p>
                      <h4><strong>¿Requisitos?</strong></h4>
                      <ul>
                      <li>Contar con carné institucional vigente que lo acredite como miembro de la Comunidad Externadista.</li>
                      <li>
                      <a href="http://catalogo.uexternado.edu.co/uhtbin/cgisirsi/x/0/x/29/1167/X/1">Estar registrado y activo</a> como usuario en el sistema de la Biblioteca.</li>
                      <li>No tener multas ni sanciones activas.</li>
                      <li>Contar con un grupo de trabajo (entre 2 y 7 personas).</li>
                      </ul>
                      <h4><strong>¿Cómo se solicita el servicio?</strong></h4>
                      <ul>
                      <li>Sin excepción, la asignación se realizará de acuerdo con el orden de llegada.</li>
                      <li>El carné de todos los integrantes del grupo será retenido durante la prestación del servicio.</li>
                      <li>El tiempo máximo de asignación será de 2 horas. Cumplido este tiempo, el usuario responsable tendrá que dirigirse al área de préstamo y devolución de salas de la Biblioteca y devolverla.</li>
                      </ul>
                      
                            </article>
                  </div>
                  <div class="tab-pane fade" id="v-pills-videoteca" role="tabpanel" aria-labelledby="v-pills-videoteca-tab">
                      <h1>Sala de consulta audiovisual</h1>
            
                      
                      
                      <h4><strong>¿Qué es?</strong></h4>
                      <p>Es el servicio por el cual usted podrá acceder al préstamo de una sala dotada con la tecnología y los recursos necesarios para disfrutar de películas y demás materiales audiovisuales disponibles en las colecciones de la Biblioteca.</p>
                      <h4><strong>¿Quién puede acceder?</strong></h4>
                      <p>Estudiantes, egresados, docentes, investigadores, personal administrativo y tesistas de la Universidad.</p>
                      <h4><strong>¿Requisitos?</strong></h4>
                      <p>Contar con carné institucional vigente que lo acredite como miembro de la Comunidad Externadista.</p>
                      <ul>
                      <li>
                      <a href="http://catalogo.uexternado.edu.co/uhtbin/cgisirsi/x/0/x/29/1167/X/1">Estar registrado y activo</a> como usuario en el sistema de la Biblioteca.</li>
                      <li>No tener multas ni sanciones activas.</li>
                      <li>La sala se presta para personas individuales o grupos (entre 2 y 7 personas).</li>
                      </ul>
                      <h4><strong>¿Cómo se solicita el servicio?</strong></h4>
                      <ul>
                      <li>Dirigirse al área de información y referencia de la biblioteca y programar el día y hora en los que realizará la consulta del material audiovisual.</li>
                      <li>El carné de la persona que realiza la reserva será retenido durante la prestación del servicio.</li>
                      <li>El tiempo máximo de asignación de la sala será el tiempo de duración del material audiovisual. Cumplido este tiempo, el usuario responsable tendrá que dirigirse al área de información y referencia y devolver la sala y el material audiovisual.</li>
                      </ul>
                  </div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"></div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"></div>
                </div>
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