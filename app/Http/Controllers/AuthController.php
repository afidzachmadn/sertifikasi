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
                return redirect()->action('AuthController@login');
            }
            //dd($usercheck);

        }
    public function registerproses(Request $request)
        {
            $user = $request->input('username');
            $password=encrypt($request->input('password'));
            // login ke db
            $logintable_login = DB::table('login');
            $data_iso_table = DB::table('data_iso');
            $data_sni_table = DB::table('data_sni');
            $profile_perusahaan_table = DB::table('profile_perusahaan');
            $status_iso_sni_table = DB::table('status_iso_sni');

            //untuk register ke table login + memasukan username ke table yang lainnya juga
            $usercheck=$logintable_login->insert(['username'=>$user, 'password'=>$password,'permission'=>2]);
            $usercheck=$data_iso_table->insert(['username'=>$user]);
            $usercheck=$data_sni_table->insert(['username'=>$user]);
            $usercheck=$profile_perusahaan_table->insert(['username'=>$user]);
            $usercheck=$status_iso_sni_table->insert(['username'=>$user]);
        return redirect()->action('AuthController@login');
        }
}
