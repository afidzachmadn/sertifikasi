<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class AuthController extends Controller {
    public function register(Request $request) {
        if($request->session()->get('login')) {
            return redirect()->action('HomeController@dashboard');
        } else {
            return view('auth.register');
        }
    return view('auth.register');
    }

    public function login(Request $request) {
        if($request->session()->get('login')) {
            return redirect()->action('HomeController@dashboard');
        } else {
            return view('auth.login');
        }
    }

    public function login_admin(Request $request) {
        if($request->session()->get('login')) {
            return redirect()->action('HomeController@dashboard_admin');
        } else {
            return view('auth.login-admin');
        }
    }

    public function bacadatabase(Request $request) {
        $email = $request->input('email');
        $password=$request->input('password');
        // login ke db
        $usersTable = DB::table('users');
        //cek username dan pass di database
        $usercheck= $usersTable->where('email', $email)->first();
        $decrypt = decrypt($usercheck->password);
            
        if($password == $decrypt) {
            $request->session()->put('login', true);
            $request->session()->put('name', $usercheck->company_name);
            $request->session()->put('id', $usercheck->id);
            $request->session()->put('img_url', $usercheck->img_url);
            if($usercheck->permission == 2) {
                return redirect()->action('HomeController@dashboard');
            }
        } else {
            return redirect()->action('AuthController@login');
        }
    }

    public function bacadatabase_admin(Request $request) {
        $email = $request->input('email');
        $password=$request->input('password');
        // login ke db
        $usersTable = DB::table('admin');
        //cek username dan pass di database
        $usercheck= $usersTable->where('email', $email)->first();
        $decrypt = decrypt($usercheck->password);
            
        if($password == $decrypt) {
            $request->session()->put('login', true);
            $request->session()->put('name', $usercheck->name);
            $request->session()->put('id', $usercheck->id);
            $request->session()->put('nip', $usercheck->nip);
            $request->session()->put('img_url', $usercheck->img_url);
            
            return redirect()->action('HomeController@dashboard_admin');
     
        } else {
            return redirect()->action('AuthController@login_admin');
        }
    }

    public function registerproses(Request $request) {
        $name = $request->input('company_name');
        $email = $request->input('email');
        $password=encrypt($request->input('password'));
        // login ke db
        $usersTable = DB::table('users');

        //untuk register ke table login + memasukan username ke table yang lainnya juga
        $usercheck=$usersTable->insert(['company_name' => $name,'email' => $email, 'password' => $password, 'permission' => 2]);
            
    return redirect()->action('AuthController@login');

    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->action('AuthController@login');
    }

     public function logout_admin(Request $request) {
        $request->session()->flush();
        return redirect()->action('AuthController@logout_admin');
    }
}
