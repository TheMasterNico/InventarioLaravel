<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objeto;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        /*$campos = request()->validate([
            'Nombre'        => 'required',
            'Referencia'    => ''
        ]);*/
        //return "ok";//$campos;
        $objetos = Objeto::latest()->get();
        return view('search', compact('objetos'));
    }

    public function show($id)
    {
        $objetos = Objeto::latest()->get();
        return view('search', compact('objetos', 'id'));
    }

    public function showPost()
    {
        $nombre = request()->Nombre;
        $objetos = Objeto::latest()->get();
        return view('search', compact('objetos', 'nombre'));
    }
}
