<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$registros = Registro::latest()->paginate( 5 );
        // SELECT objetos.Nombre, registros.* FROM registros LEFT JOIN objetos ON registros.objetos_id = objetos.id
        $registros = Registro::select('objetos.Nombre', 'registros.*')
                ->join('objetos', 'registros.objetos_id', '=', 'objetos.id')
                ->latest()->paginate( 5 );
        return view('registro', compact('registros'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
