<?php

namespace App\Http\Controllers;

use App\Models\AltayBaja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class AltasyBajas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Colocamos la informacion de index
        //DB:select - > es un metodo
        $results = DB::select('SELECT SUM(Cantidad) as total FROM altasbajas WHERE Tipo = ?', ['Gasto']);
        $totalGastos = $results[0]->total;
        // se va a limpiar [0]
            // se va a mandar a vaiables totalGastos
            
        $results1 = DB::select('SELECT SUM(Cantidad) as total FROM altasbajas WHERE Tipo = ?', ['Pago']);
        $totalPagos = $results1[0]->total;
        return view('index', compact('totalGastos', 'totalPagos'));
        //
    }

    public function AltasYBajas(){


        $items = AltayBaja::all();
        return view('AltasYBajas', compact('items'));

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');

    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = new AltayBaja();
        $item->Tipo = $request->Tipo;
        $item->Categoria = $request->Categoria;
        $item->Cantidad = $request->Cantidad;
        $item->Descripcion = $request->Descripcion;    
        $item->Fecha = $request->Fecha;
        $item->save();
        return redirect('/AltasYBajas');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
