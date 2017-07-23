<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

/* ------------------------------------ Kumpulan fungsi2 untuk ISO  ------------------------------ */ 

    public function iso(Request $request){
      $email = $request->session()->get('email');
      
        if($request->session()->get('login')) {
            return view('admin.iso');
        } else {
            return view('auth.login-admin');
        }
   }

     public function belum_terverifikasi_iso(Request $request){
     $email = $request->session()->get('email');
        if($request->session()->get('login')) {
            return view('admin.belum-terverifikasi-iso');
        } else {
            return view('auth.login-admin');
        }
    }
/* ------------------------------------------------------------------------------------------------ */



/* ------------------------------------- Kumpulan fungsi2 untuk SNI -------------------------------- */

    public function sni(Request $request){
     $email = $request->session()->get('email');
        if($request->session()->get('login')) {
            return view('admin.sni');
        } else {
            return view('auth.login-admin');
        }
    }

/* ------------------------------------------------------------------------------------------------- */
}
