<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Crypt;


class AuthController extends Controller
{
    public function register()
        {
            return view('auth.register');
        }
    public function login()
        {
            return view('auth.login');
        }
    public function bacadatabase(Request $request)
        {
            $user = $request->input('username');
            $password=$request->input('password');
            // login ke db
            $loginTable = DB::table('login');
            //cek username dan pass di database
            $usercheck= $loginTable->where('username', $user)->first();
            $decrypt = decrypt($usercheck->password);
            if($password == $decrypt) {
                return redirect()->action('HomeController@indexuser');
            } else {
                echo 'login gagal';
            }
            //dd($usercheck);

        }
    public function registerproses(Request $request)
        {
            $user = $request->input('username');
            $password=encrypt($request->input('password'));
            // login ke db
            $logintable = DB::table('login');
            $usercheck=$logintable->insert(['username'=>$user, 'password'=>$password,'permission'=>2]);
            // redirect('/');
            dd($password);
        }
}
