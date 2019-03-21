@extends('layout.layout2')
@section('titulo','Solicitud de Compras')
@section('contenido')

<h4><strong> Sugerir compra de bibliografía </strong></h4>
<strong> ¿Requisitos? </strong>
<ul>
    <li>Antes de sugerir una compra verifique en el catálogo que el material bibliográfico (libros, películas, mapas, bases de datos, revistas, entre otros) no se encuentre disponible en nuestras colecciones.
        </li>
        <li>La sugerencia será evaluada y autorizada para compra por el profesor enlace asignado por cada Facultad, Departamento o Dependencia, según corresponda.
            </li>
</ul>

<p>
<b>Importante:</b> la suscripción, renovación y suspensión de bases de datos y revistas depende de un proceso que la Biblioteca adelanta con las Facultades durante el año anterior a la vigencia de la suscripción, la cual es enero-diciembre.

</p>

<div class="row">
        <div class="card col-md-6 mr-2" style="max-width: 30rem;">
                <div class="card-body">
                  <h5 class="card-title">Solicitud en Linea</h5>
                  <p class="card-text">Si desea realizar alguna solicitud de compra de material bibliografico, lo invitamos a ingrasar con sus respectivas credenciales al OPAC. </p>
                  <a href="http://unipacifico.metabiblioteca.org/" target="blank">Realizar solicitud en linea</a>
                </div>
              </div>
        
              <div class="card col-md-6" style="max-width: 30rem;">
                    <div class="card-body">
                      <h5 class="card-title">Solicitud por correo Electrónico</h5>
                      <p class="card-text">
                          Si deseas sugerir varios libros, descarga nuestro formato; y una vez diligenciado el formulario, debe ser enviado a <strong> adquisiciones.biblioteca@unipacifico.edu.co</strong>  desde tu correo institucional.
                      </p>
                      <a href="#">Descargar formato de solicitud</a>
                    </div>
                  </div>

</div>


@endsection