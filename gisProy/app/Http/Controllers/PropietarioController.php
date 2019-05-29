<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\propietario;
use App\User;

class PropietarioController extends Controller
{
    public function propietarios(){
        $propietarios = propietario::all();
        return view('admin.propietarios', compact("propietarios"));
    }

    public function propietarioNew(){
        $users= User::all();
        return view('admin.propietarioNew', compact("users"));
    }

    public function propietarioSave(Request $request){
        $propietario = new Propietario();
        $propietario->nombre = $request->input('nombre');
        $propietario->apellido = $request->input('apellido');
        $propietario->CI = $request->input('ci');
        $propietario->telefono = $request->input('telefono');
        $propietario->IdUser= $request->input('user');
        $propietario->save();
        return redirect('/admin/propietarios');
    }
}
