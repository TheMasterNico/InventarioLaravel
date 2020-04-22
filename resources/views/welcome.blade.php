@extends('plantilla')

@section('contenido')
    <div class="container">
        <form style="display:block; padding-top: 5%" class="form-inline">
            <div class="row">
                <small class="col-auto form-text text-muted">Puedes elegir entre el código o el nombre</small>
                <p class="w-50  "><!-- will also break a line if boostrap is not loaded --></p>
                <div class="col-auto input-group" id="inputProduct">
                    <input disabled list="Referencias" type="text" class="form-control" id="Referencia" placeholder="Código de referencia">
                    <input list="Nombres" type="text" class="form-control" id="Nombre" placeholder="Nombre del producto">
                    
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        <input type="number" class="form-control" id="Cantidad" placeholder="Cantidad Vendida">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        <button type="button" class="from-control btn btn-primary btn-lg">Agregar</button>&nbsp;&nbsp;
                        <button type="button" class="from-control btn btn-light">Limpiar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>    
@endsection