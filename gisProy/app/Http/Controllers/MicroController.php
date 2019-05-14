<?php

namespace App\Http\Controllers;

use App\micro;
use Illuminate\Http\Request;

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
        return view('admin.microNew');
    }

    public function microSave(Request $request){
        $micro = new Micro();
        $micro->placa= $request->input('placa');
        $micro->modelo= $request->input('modelo');
        $micro->capacidad= $request->input('capacidad');
        $micro->save();
        return redirect('/admin/micros');
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
