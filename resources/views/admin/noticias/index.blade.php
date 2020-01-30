@extends('layout.admin')

@section('titulo','Administracion | Noticias')
@section('titulo2','Texto del titulo')

@section('breadcrumbs')
@endsection

@section('contenido')
@endsection
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de noticias</h3>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary">
                                <i class="fas fa-plus"></i>Agregar noticia
                                </button>
                    <table class="table">
                     <thead>
                        <tr>
                            <th>
                                Noticia
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                     </thead>
                     <tbody>   
                        @foreach($noticias as $noticia)
                            <tr>
                                <td>
                                    {{$noticia -> titulo}}
                                </td>
                                <button class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                                <td>
                                    {{$noticia -> titulo}}
                                </td>
                                
                                <td>
                                    {{$noticia -> titulo}}
                                </td>
                                
                            </tr>
                        @endforeach
                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@section('scripts')
@endsection

@section('estilos')
@endsection


