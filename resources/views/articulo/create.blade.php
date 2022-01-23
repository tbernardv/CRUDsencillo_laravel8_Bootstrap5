@extends('layouts.plantillabase');

@section('contenido')
    <h2>CREAR REGISTROS</h2>

    <form action="/articulos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">C&oacute;digo</label>
            <input type="text" name="txtcodigo" id="txtcodigo" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripci&oacute;n</label>
            <input type="text" name="txtdescripcion" id="txtdescripcion" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" name="txtcantidad" id="txtcantidad" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" name="txtprecio" id="txtprecio" class="form-control" step="any" value="0.00" tabindex="4">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
@endsection