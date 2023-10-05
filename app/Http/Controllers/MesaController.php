<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesas=Mesa::get();//Esto trae todos los menus
        return view('mesas.index',compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mesas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos=$request->all();
       Mesa::create($datos);
       return redirect()->route('mesas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mesa=Mesa::find($id);
        return view ("mesas.edit", compact('mesa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mesa=Mesa::find($id);
        $mesa->id_mesa=$request->id_mesa;
        $mesa->capacidad=$request->capacidad;
        $mesa->save();
        return redirect ()->route('menus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mesa=Mesa::find($id);
        $mesa->delete();
        return redirect ()->route('mesas.index');
    }
}
