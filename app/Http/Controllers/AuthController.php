<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class AuthController extends Controller
{
    public function register()
        {
            if($request->session()->get('login')) {
                return redirect()->action('HomeController@dashboard');
            } else {
                return view('auth.register');
            }
        return view('auth.register');
        }
    public function login(Request $request)
        {
            if($request->session()->get('login')) {
                return redirect()->action('HomeController@dashboard');
            } else {
                return view('auth.login');
            }
        }
    public function bacadatabase(Request $request)
        {
            $email = $request->input('email');
            $password=$request->input('password');
            // login ke db
            $loginTable = DB::table('users');
            //cek username dan pass di database
            $usercheck= $loginTable->where('email', $email)->first();
            $decrypt = decrypt($usercheck->password);
            
            if($password == $decrypt) {
                $request->session()->put('login', true);
                $request->session()->put('name', $usercheck->company_name);
                $request->session()->put('id', $usercheck->id);
                $request->session()->put('img_url', $usercheck->img_url);
                return redirect()->action('HomeController@dashboard');
            } else {
                return redirect()->action('AuthController@login');
            }

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
