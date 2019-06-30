<?php

namespace App\Http\Controllers;

use App\ruta;
use Illuminate\Http\Request;
use App\ubicacion;
use DB;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ruta');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rutas.create');   
    }

    public function rutas(){
        $rutas = ruta::all();
        return view('admin.rutas.rutas', compact("rutas"));
    }

    public function rutaNew(){
        return view('admin.rutaNew');
    }

    public function rutaSave(Request $request){
        $ruta = new ruta();
        $ruta->Nombre = $request->input('nombre');
        $ruta->Punto_inicio = $request->input('puntoInicial');
        $ruta->Punto_final = $request->input('puntoFinal');
        $ruta->save();
        return redirect ('/admin/rutas');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruta = new ruta();
        $ruta->Nombre = $request->input('nombre');
        $ruta->save();

        $resultado = str_replace("(", "", $request->latLog);
        $resultado1 = str_replace(")", "", $resultado);
        $array = explode(",", $resultado1);
        //dd($array);
        //dd(sizeof($array));
        for ($i=0; $i<sizeof($array); $i++){
            $ubicacion = new ubicacion();
            $ubicacion->Latitud = $array[$i];
            $ubicacion->Longitud = $array[$i+1];
            $ubicacion->Nombre = "Default";
            $ubicacion->ruta_id = $ruta->id;
            $ubicacion->save();
            $i++;
        }

        return redirect('/admin/rutas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lat = DB::table('ubicacions')
        ->select('ubicacions.Latitud')
        ->where('ruta_id', '=', $id)
        ->get();

        $lng = DB::table('ubicacions')
        ->select('ubicacions.Longitud')
        ->where('ruta_id', '=', $id)
        ->get();
        
        
        //dd($ruta);
        return view('admin.rutas.visualizar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function edit(ruta $ruta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ruta $ruta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function destroy(ruta $ruta)
    {
        //
    }
}
