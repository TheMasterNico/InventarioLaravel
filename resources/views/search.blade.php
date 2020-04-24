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
                    <th scope="col">Editar</th>
                    <th scope="col">Almacenar</th>
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
                                <td>
                                    <div class="text-center">
                                        <a href="{{route('editar.edit', $objeto)}}">
                                            <svg class="text-dark bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
                                                <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a  href="{{route('almacenar.edit', $objeto)}}">
                                            <svg class="text-dark bi bi-plus-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                                                <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
                                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
            </tbody>
        </table>
        @isset($objetos)
            {{$objetos->links()}}
        @endisset
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