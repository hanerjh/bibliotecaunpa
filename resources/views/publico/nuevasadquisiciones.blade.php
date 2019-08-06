@extends('layout.layout2')

@section('titulo','Novedades Bibliográficas')
@section('contenido')

<h2> </h2>

<p>

    El Boletín de nuevas adquisiciones tiene por objetivo difundir los recursos bibliográficos que por compra, canje y/o donación que llega a la Biblioteca. Por tal razón ponemos a disposición de nuestros usuarios, los boletines con los nuevos recursos que están disponibles para consulta. 
        
</p>

<table class="table table-sm table-bordered ">
        <thead class="thead-light">
          <tr>            
            <th scope="col">Nro</th>
            <th scope="col">Docuemento</th>
            <th scope="col">Año</th> 
            <th scope="col">Descargar</th>           
          </tr>
        </thead>
        <tbody>
          @foreach ($informes as $informe)
          @if ($informe->fktipodocumento==3)

          <tr>
              <td>{{ $loop->index}}</td>   
              <td>{{ $informe->titulo}}</td>
              <td>{{Carbon\Carbon::parse($informe->created_at)-> format('M j, Y')}}</td>
              <td><a href="storage/asset/documentos/{{$informe->archivo}}" target="blank">Descargar</a></td>
          </tr>

          @endif
          @endforeach
        </tbody>
      </table>
      
      

  @endsection