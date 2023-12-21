<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencia;

class IncidenciaController extends Controller  //Este es el controlador de Incidencias 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidencias=Incidencia::all();

        //var_dump($incidencias);ç
        
        //    nombre de clase en la view
        return view('incidencias',['incidencias'=>$incidencias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nuevaincidencia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incidencia= new Incidencia;

        $incidencia->latitud=$request->latitud;
        $incidencia->longitud=$request->longitud;
        $incidencia->ciudad=$request->ciudad;
        $incidencia->direccion=$request->direccion;
        $incidencia->etiqueta=$request->etiqueta;
        $incidencia->descripcion=$request->descripcion;
        $incidencia->estado="abierta";

        $incidencia->save();
        
        return redirect('/incidencias');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     

        $incidencia = Incidencia::find($id);
        return view ('detalleincidencia',['incidencia'=>$incidencia]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Incidencia::destroy($id);
        return redirect('/incidencias');
    }
}
