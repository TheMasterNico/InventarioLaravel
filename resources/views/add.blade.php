@extends('plantilla')

@section('contenido')

<div class="container" style="padding-top:5%;">
    <!-- Formulario de agregar -->
    <form method="POST" action=" {{ route('add.store') }}" style="display:block; padding-top: 5%" class="form-inline">
        @csrf
        <div class="form-group">
            <label for="Ref" class="col-sm-2 control-label">Referencia</label>
            <div class="col-sm-10">
            <input list="Referencias" required value="{{old('Referencia')}}" type="text" name="Referencia" class="form-control" placeholder="Identificación de producto">
            {!! $errors->first('Referencia', '<span class="badge badge-danger">:message</span>') !!}
        </div>
        </div>
        <!-- || -->
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input list="Nombres" required value="{{old('Nombre')}}" type="text" name="Nombre" class="form-control" placeholder="Nombre del producto">
                {!! $errors->first('Nombre', '<span class="badge badge-danger">:message</span>') !!}
            </div>
        </div>
        <!-- || -->
        <div class="form-group">
            <label for="descr" class="col-sm-2 control-label">Descripción</label>
            <div class="col-sm-10">
                <textarea value="{{old('Descripcion')}}" class="form-control" name="Descripcion" rows="2" placeholder="Descripción sobre el producto"></textarea>
            </div>
        </div>
        <!-- || -->
        <div class="form-group">
            <label for="cost" class="col-sm-2 control-label">Precio</label>
            <div class="col-sm-10">
                <input required value="{{old('Precio')}}" type="number" name="Precio" class="form-control" placeholder="Precio por unidad">
                {!! $errors->first('Precio', '<span class="badge badge-danger">:message</span>') !!}
            </div>
        </div>
        <!-- || -->
        <div class="form-group">
            <label for="cost" class="col-sm-2 control-label">Cantidad Inicial</label>
            <div class="col-sm-10">
                <input type="number" name="Cantidad" class="form-control" value="0">
                {!! $errors->first('Cantidad', '<span class="badge badge-danger">:message</span>') !!}
            </div>
        </div>
        <!-- || -->
        <div class="form-group">
            <div   class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="from-control btn btn-primary btn-lg">Agregar</button>&nbsp;&nbsp;
                <button type="reset" class="from-control btn btn-light">Limpiar</button>
            </div>
        </div>
    </form> 
    <!-- Formulario de agregar -->
    
    @isset($campos)
    <div class="modal fade" id="addSuccefull" tabindex="-1" role="dialog" aria-labelledby="addSuccefullLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSuccefullLabel">Objeto guardado/h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Se ha agregado con exito el objeto {{$campos['Nombre']}} con un valor de {{$campos['Precio']}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    @section('page-script')
    <script type="text/javascript">
        <alert>
            Se ha agregado con exito el objeto {{$campos['Nombre']}} con un valor de {{$campos['Precio']}}
        </alert>
    </script>
    @endsection
    @endisset
</div>

@endsection()