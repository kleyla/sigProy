<?php

namespace App\Http\Controllers;

use App\micro;
use Illuminate\Http\Request;
use App\propietario;
use App\conductor;
use App\ruta;

class MicroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function micros(){
        $micros = micro::all();
        return view('admin.micros', compact("micros"));
    }

    public function microNew(){
        $propietarios= propietario::all();
        $conductors = conductor::all();
        $rutas = ruta::all();
        return view('admin.microNew', compact("propietarios", "conductors", "rutas"));
    }

    public function microSave(Request $request){
        //guardar la imagen
        $file =$request->file('photo');
        if($file){
            $path = public_path() . '/img/micros'; 
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);    	
            $micro = new Micro();
            $micro->imagen= $fileName;
            $micro->placa= $request->input('placa');
            $micro->modelo= $request->input('modelo');
            $micro->interno =$request->input('interno');
            $micro->capacidad= $request->input('capacidad');
            $micro->IdConductor=$request->input('conductor');
            $micro->IdPropietario=$request->input('propietario');
            $micro->IdRuta=1;
            
            $micro->save();
            return redirect('/admin/micros');
        }else{
            return redirect('/admin/welcome');
        }
    	
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\micro  $micro
     * @return \Illuminate\Http\Response
     */
    public function show(micro $micro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\micro  $micro
     * @return \Illuminate\Http\Response
     */
    public function edit(micro $micro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\micro  $micro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, micro $micro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\micro  $micro
     * @return \Illuminate\Http\Response
     */
    public function destroy(micro $micro)
    {
        //
    }
}
