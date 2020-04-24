
@extends('plantilla')

@section('contenido')

<div class="container" style="padding-top:5%;">
    <!-- Formulario de buscar -->
    <p class="w-50  "><!-- will also break a line if boostrap is not loaded --></p>
    <div class="table-responsive" id="Data">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Acción</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                @isset($registros)
                    @foreach($registros as $registro) 
                        <tr id="{{$registro->id}}">                           
                                <th>{{ $registro->Accion }}</th>
                                <td>{{ $registro->Nombre }}</td>
                                <td>{{ $registro->Cantidad }}</td>
                                <td>${{ $registro->PrecioTotal }}</td>
                            </tr>
                        @endforeach
                    @endisset
            </tbody>
</div>

@endsection()