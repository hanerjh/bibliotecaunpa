@extends('layout.layoutamin')
@section('contenido')





<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Listado de Documentos

            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Titulo</th>
                            <th class="text-center">Fecha de Publicación</th>                           
                            <th class="text-center">Tipo</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Accion</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($documentos as $documento)

                        <tr>
                            <td class="text-center text-muted">{{$loop->index+1}}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img width="40" class="rounded-circle" src="assets/"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{ $documento->titulo}}</div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{ $documento->created_at}}</td>                            
                                <td class="text-center">
                                    <div class="badge badge-warning">{{ $documento->tdocumento}}</div>
                                </td>
                                <td class="text-center">
                                    @if($documento->estado==1)
                                      <p class="text-success">Activo</p>
                                      @else
                                      <p class="text-danger">Inactivo</p>
                                    @endif
                                   

                                </td>
                                <td class="text-center">
                                    <a href="regdocumentos/{{$documento->id}}/edit"  id="PopoverCustomT-1"
                                        class="btn btn-primary btn-sm">Editar</button>
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
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
@endsection