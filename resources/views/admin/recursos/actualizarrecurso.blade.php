@extends('layout.layoutamin')
@section('contenido')





<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Listado de recursos digitales

            </div>
            <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                           
                            <th class="text-center">Nombre</th>  
                            <th class="text-center">Tipo</th>                         
                            <th class="text-center">Estado</th>
                            <th class="text-center">Accion</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($recursos as $recurso)

                        <tr>
                            <td class="text-center text-muted">{{$loop->index+1}}</td>
                            
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img width="80" class="" src="/asset/img/recursos/{{$recurso->foto}}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{ $recurso->nombre}}</div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </td>                              
                               
                                <td class="text-center text-muted">  <div class="badge badge-warning"> {{ $recurso->titulo}} </div></td>
                                <td class="text-center">
                                    @if($recurso->estado==1)
                                      <p class="text-success">Activo</p>
                                      @else
                                      <p class="text-danger">Inactivo</p>
                                    @endif
                                   

                                </td>
                                <td class="text-center">
                                    <a href="recursosElectronicos/{{$recurso->id}}/edit"  id="PopoverCustomT-1"
                                        class="btn btn-primary">Editar</a> &nbsp;
                                        <a href="{{  url('recursosElectronicos', [$recurso->id])}}  " class="btn btn-danger" data-method="delete" data-token="{{ csrf_token() }}"  data-confirm="Esta seguro que desea elimiar este registro?">Delete</a>

                                </td>
                               
                            </tr>
                            
                        @endforeach
                

                    </tbody>
                </table>
            </div>
            <div class="d-block text-center card-footer">

            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url("js/laravel.js")}}"></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>

<script>
		window.csrfToken = '<?php echo csrf_token(); ?>';
  </script>
@endsection