<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objeto;
use App\Registro;

class ObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objetos = Objeto::latest()->paginate( 5 );
        return view('search', compact('objetos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Objeto $objetos)
    {
        //$objetos = Objeto::latest()->get();
        return view('add', $objetos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(/*Request $request*/)
    {
        $campos = request()->validate([
            'Nombre'        => 'required',
            'Referencia'    => 'required',
            'Descripcion'   => '',
            'Precio'        => 'required',
            'Cantidad'      => ''
        ]);
        $nuevoObjeto = Objeto::create($campos); // se crea el objeto en la tabla
        $registro = [ // creamos los datos
            'Accion' => 'Crear',
            'Cantidad' => $nuevoObjeto->Cantidad,
            'PrecioTotal' => $nuevoObjeto->Precio,
            'objetos_id' => $nuevoObjeto->id
        ];
        Registro::create($registro);
        return view('add', ['id' => $nuevoObjeto->id, 'campos' => $campos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objetos = Objeto::latest()->paginate( 5 );
        return view('search', compact('objetos', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Objeto $objeto)
    {
        //
        //return $objeto;
        return view('editar', ['objeto' => $objeto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Objeto $objeto)
    {
        //
        $objeto->update([
            'Referencia'    => request('Referencia'),
            'Nombre'        => request('Nombre'),
            'Descripcion'   => request('Descripcion'),
            'Precio'        => request('Precio'),            
            'Cantidad'      => request('Cantidad')
        ]);
        $registro = [ // creamos los datos
            'Accion' => 'Edicion',
            'Cantidad' => $nuevoObjeto->Cantidad,
            'PrecioTotal' => $nuevoObjeto->Precio,
            'objetos_id' => $nuevoObjeto->id
        ];
        Registro::create($registro);
        return redirect()->route('search');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function almacenar(Objeto $objeto)
    {
        //
        //return $objeto;
        return view('almacenar', ['objeto' => $objeto]);
    }

    public function agregar(Objeto $objeto)
    {
        $campos = request()->validate([
            'Nombre'        => '',
            'Referencia'    => '',
            'Precio'        => 'required',
            'Cantidad'      => 'required'
        ]);
        
        $objeto->update([
            'Cantidad' => $objeto->Cantidad + request()->Cantidad
        ]);
        $registro = [ // creamos los datos
            'Accion' => 'Almacenar',
            'Cantidad' => request()->Cantidad,
            'PrecioTotal' => request()->Precio,
            'objetos_id' => $objeto->id
        ];
        Registro::create($registro);
        //Objeto::where('Nombre', $campos->Nombre)->update();
        return redirect()->route('search');
    }
}
