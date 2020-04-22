@extends('plantilla')

@section('contenido')
    <!-- NuevaMercancia -->
    <div class="container" style="padding-top:5%;">
        <!-- Formulario de agregar -->
        <form class="form-horizontal">            
            <div class="form-group">
                <small class="col-auto form-text text-muted">Puedes elegir entre el código o el nombre</small>
                <p class="w-50  "><!-- will also break a line if boostrap is not loaded --></p>
                <div class="col-auto input-group" id="inputProduct">
                    <input disabled list="Referencias" type="text" class="form-control" id="Referencia" placeholder="Código de referencia"> 
                    <input list="Nombres" type="text" class="form-control" id="Nombre" placeholder="Nombre del producto">
                    
                </div>
            </div>
            <!-- || -->
            <div class="form-group">
                <label class="col-sm-2 control-label">Cantidad</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="Cantidad" placeholder="Cantidad de productos recibidos">
                </div>
            </div>
            <!-- || -->
            <div class="form-group">
                <label class="col-sm-2 control-label">Precio</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="Precio" placeholder="Precio del producto recibido (Total)">
                </div>
            </div>
            <!-- || -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Almacenar Producto">
                    <input type="reset" class="btn btn-light" value="Limpiar Campos" type="reset">
                </div>
            </div>
        </form>
        <!-- Formulario de agregar -->
        </div>



@endsection()