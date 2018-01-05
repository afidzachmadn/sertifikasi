<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
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
        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make(Input::all(), $rules);
        // login ke db
        $usersTable = DB::table('users');
        //cek username dan pass di database
        $usercheck= $usersTable->where('email', $email)->first();
        //dd($usercheck);
        //dd($validator->fails());
        if($validator->fails()){
            $pesan = 'captcha salah!';

            return redirect()->action('AuthController@login')->with('message','kode yang anda masukan salah');
            
            
        }
        else{
            if($usercheck != null){

        
                $decrypt = decrypt($usercheck->password);
            
                if($password == $decrypt) {
                    $request->session()->put('login', true);
                    $request->session()->put('role', 'user');
                    $request->session()->put('name', $usercheck->company_name);
                    $request->session()->put('id', $usercheck->id);
                    $request->session()->put('img_url', $usercheck->img_url);
                    if($usercheck->permission == 2) {
                        return redirect()->action('HomeController@dashboard');
                    }
                } 
                else {
                    return redirect()->action('AuthController@login');
                }
            }
            else{
                return redirect()->action('AuthController@login');
            }
        }
    }

    public function bacadatabase_admin(Request $request) {
        $email = $request->input('email');
        $password=$request->input('password');
        // login ke db
        $usersTable = DB::table('admin');
        //cek username dan pass di database
        $usercheck= $usersTable->where('email', $email)->first();
        if($usercheck != null){
            $decrypt = decrypt($usercheck->password);    
            if($password == $decrypt) {
            
                $request->session()->put('login', true);
                $request->session()->put('name', $usercheck->name);
                $request->session()->put('id', $usercheck->id);
                $request->session()->put('nip', $usercheck->nip);
                $request->session()->put('img_url', $usercheck->img_url);
                $request->session()->put('role', 'admin');
                return redirect()->action('HomeController@dashboard_admin');
            } 
            else {
            return redirect()->action('AuthController@login_admin');
            }
        }
        else{
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
        return redirect()->action('AuthController@login_admin');
    }

    public function logout_pegawai_lapangan(Request $request) {
        $request->session()->flush();
        return redirect()->action('AuthController@login_pegawai_lapangan');
    }



    public function login_pegawai_lapangan(Request $request) {
        if($request->session()->get('login')) {
            return redirect()->action('PegawaiLapangan@dashboard');
        } else {
            return view('auth.login-pegawai-lapangan');
        }
    }


    public function bacadatabase_pegawai_lapangan(Request $request) {
        $email = $request->input('email');
        $password=$request->input('password');
        // login ke db
        $usersTable = DB::table('pegawai_lapangan');
        //cek username dan pass di database
        $usercheck= $usersTable->where('email', $email)->first();
        if($usercheck != null){
            $decrypt = decrypt($usercheck->password);    
            if($password == $decrypt) {
            
                $request->session()->put('login', true);
                $request->session()->put('name', $usercheck->name);
                $request->session()->put('id', $usercheck->id);
                $request->session()->put('nip', $usercheck->nip);
                //$request->session()->put('img_url', $usercheck->img_url);
                $request->session()->put('role', 'pegawai_lapangan');
                return redirect()->action('PegawaiLapangan@dashboard');
            } 
            else {
            return redirect()->action('AuthController@login_pegawai_lapangan');
            }
        }
        else{
            return redirect()->action('AuthController@login_pegawai_lapangan');
        }
    }



















}
