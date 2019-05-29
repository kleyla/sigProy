<?php

namespace App\Http\Controllers;

use App\conductor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;

class ConductorController extends Controller
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

    public function conductorPerfil(){
        return view('admin.conductor');
    }

    public function conductores(){
        $conductores = conductor::all();
        return view('admin.conductores', compact("conductores"));
    }

    public function conductorNew(){
        $users = User::all();
        return view('admin.conductorNew', compact("users"));
    }

    public function conductorSave(Request $request){
        $conductor = new conductor();
        $conductor->nombre = $request->input('nombre');
        $conductor->apellido = $request->input('apellido');
        $conductor->CI = $request->input('ci');
        $conductor->telefono = $request->input('telefono');
        $conductor->fechaIngreso= Carbon::now()->toDateTimeString();
        $conductor->IdUser= $request->input('user');
        $conductor->save();
        return redirect('/admin/conductores');
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
     * @param  \App\conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function show(conductor $conductor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function edit(conductor $conductor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, conductor $conductor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function destroy(conductor $conductor)
    {
        //
    }
}
