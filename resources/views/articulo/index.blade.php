@extends('layouts.plantillabase')

@section('contenido')
    <a href="/articulos/create" class="btn btn-primary">CREAR</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
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
@endsection