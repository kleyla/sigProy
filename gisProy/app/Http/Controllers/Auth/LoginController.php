<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use DB;
use Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function validateLoginu(Request $request)
    {
        if ($request) {
            $email = $request->get('Email');
            $password = $request->get('Password');

            $user = DB::table('users')
                ->select('password', 'id')
                ->where('email', '=', $email)->get();
            if (empty($user)) {
                $array = array(
                    "Tipo" => 0,
                );
                return response()->json($array);
            } else {
                $id = $user[0]->id;
                $pass = ($user[0]->password);
                if (Hash::check($password,$pass)) {
                    $idConductor = DB::table('conductors')
                    ->select('id')
                    ->where('IdUser', '=', $id)->get();
                    $array = array(
                        "Id" => $idConductor,
                        "Tipo" => 1,
                    );
                    return response()->json($array);
                } else {
                    $array = array(
                        "Tipo" => 0,
                    );
                    return response()->json($array);
                }
            }
        }
    }
}
