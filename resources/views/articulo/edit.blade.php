@extends('layouts.plantillabase');

@section('contenido')
    <h1>EDITAR REGISTROS</h1>

    <form action="/articulos/{{$articulo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">C&oacute;digo</label>
            <input type="text" name="txtcodigo" id="txtcodigo" class="form-control" value="{{$articulo->codigo}}" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripci&oacute;n</label>
            <input type="text" name="txtdescripcion" id="txtdescripcion" class="form-control" value="{{$articulo->descripcion}}" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" name="txtcantidad" id="txtcantidad" class="form-control" value="{{$articulo->cantidad}}" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" name="txtprecio" id="txtprecio" class="form-control" step="any" value="{{$articulo->precio}}" tabindex="4">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
@endsection