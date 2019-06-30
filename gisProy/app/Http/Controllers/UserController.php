<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function users(){
        $users= User::all();
        //dd($users);
        return view('admin.users', compact("users"));
    }

    public function userNew(){
        return view('admin.userNew');
    }

    public function userSave(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('contrasenha'));
        $user->save();
        return redirect('/admin/users');
    }
}

