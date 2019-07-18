@extends('layout.layout2')

@section('titulo','')
@section('contenido')

<h2> Nuevas Adquisiones</h2>

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
                <tr>
                        <th scope="row">1</th>
                        <td>Boletin Nuevas adquisiones - Enero</td>
                        <td>2018</td>
                      <td><a href=""><i class="fas fa-file-pdf fa-3x text-danger"></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Boletin Nuevas adquisiones - Abril</td>
                        <td>2018</td>
                        <td><a href=""><i class="fas fa-file-pdf fa-3x text-danger"></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Boletin Nuevas adquisiones - Julio</td>
                        <td>2018</td>
                        <td><a href=""><i class="fas fa-file-pdf fa-3x text-danger"></td>
                      
                      </tr>
        </tbody>
      </table>
      
      

  @endsection