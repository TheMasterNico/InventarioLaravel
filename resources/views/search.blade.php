@extends('plantilla')

@section('contenido')

<div class="container" style="padding-top: 5%;">
    <!-- Formulario de buscar -->
<form method="POST" action="{{route('search.post')}}" style="display:block; padding-top: 5%" class="form-inline">
        @csrf
        <div id="BuscarDato" class="form-group row">
            <input disabled list="Referencias" type="text" class="form-control" name="Referencia" placeholder="Código de referencia">
            <input list="Nombres" type="text" class="form-control" name="Nombre" placeholder="Nombre del producto">

            <button type="submit" class="from-control btn btn-primary">Buscar</button>
        </div>
    </form>
    <!-- Formulario de buscar -->
    <p class="w-50  "><!-- will also break a line if boostrap is not loaded --></p>
    <div class="table-responsive" id="Data">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Referencia</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad Actual</th>
                    <th scope="col">Precio (Unidad)</th>
                </tr>
            </thead>
            <tbody>
                    @isset($objetos)
                        @foreach($objetos as $objeto) 
                            <tr id="{{$objeto->id}}" 
                            @isset($id)
                                @if ($id == $objeto->id)
                                    class="bg-primary"
                                @endif
                            @endisset
                            @isset($nombre)
                                @if ($nombre == $objeto->Nombre)
                                    class="bg-primary"
                                @endif                                
                            @endisset
                            
                            data-toggle="tooltip" data-placement="top" title="{{ $objeto->Descripcion }}">                           
                                <th>{{ $objeto->Referencia }}</th>
                                <td>{{ $objeto->Nombre }}</td>
                                <td>{{ $objeto->Cantidad }}</td>
                                <td>${{ $objeto->Precio }}</td>
                            </tr>
                        @endforeach
                    @endisset
            </tbody>
        </table>
    </div>
</div>


<script type="text/javascript">

    let BuscarDato = new Vue({
      el: '#BuscarDato',
      methods: {
        di: function () {
          alert("Hola")
        }
      }
    })
    
    
    </script>

@endsection()