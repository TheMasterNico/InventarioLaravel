<?php

namespace App\Http\Controllers;
use App\Objeto;

class AddItemController extends Controller
{
    public function store()
    {
        $campos = request()->validate([
            'Nombre'        => 'required',
            'Referencia'    => 'required',
            'Descripcion'   => '',
            'Precio'        => 'required',
            'Cantidad'      => ''
        ]);

        $nuevoObjeto = Objeto::create($campos);
        //return $campos['Nombre'];
        //return view('search.show', $nuevoObjeto->id);//['campos' => $campos]);
        return redirect()->route('search.last', ['id' => $nuevoObjeto->id]);
    }
}
