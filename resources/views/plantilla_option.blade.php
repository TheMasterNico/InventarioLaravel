
@isset($objetos)
<datalist style="display:none;" id="Referencias">
@foreach($objetos as $objeto) 
    <option value="{{ $objeto->Referencia }}">{{$objeto->Referencia}}</option>
@endforeach
</datalist>
@endisset

@isset($objetos)
    <datalist style="display:none;" id="Nombres">
    @foreach($objetos as $objeto) 
        <option value="{{ $objeto->Nombre }}">{{$objeto->Nombre}}</option>
    @endforeach
    </datalist>
@endisset