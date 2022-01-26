@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Listado de art&iacute;los</h1>
@stop

@section('content')
    <a href="/articulos/create" class="btn btn-primary mb-3">CREAR</a>

    <table id="tblarticulos" class="table table-striped shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articulos as $row_articulo)
            <tr>
                <td>{{$row_articulo->id}}</td>
                <td>{{$row_articulo->codigo}}</td>
                <td>{{$row_articulo->descripcion}}</td>
                <td>{{$row_articulo->cantidad}}</td>
                <td>{{$row_articulo->precio}}</td>
                <td>
                    <form action="/articulos/{{$row_articulo->id}}" method="POST">
                        <a href="/articulos/{{$row_articulo->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            //Inicializando datatable para la tabla tblarticulos
            $('#tblarticulos').DataTable({
                "lengthMenu" : [[5,10,50,-1], [5,10,50, "All"]]
            });

        } );
    </script>
@stop