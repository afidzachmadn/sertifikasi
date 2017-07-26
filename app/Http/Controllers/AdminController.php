<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     $userList = DB::table('users')->where('status_ISO', 'belum-terverifikasi')->get();

        if($request->session()->get('login')) {
            return view('admin.belum-terverifikasi-iso', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }
    }

    public function proses_verifikasi_iso(Request $request){
 

     $id = $request->get('no');
     $status_iso = $request->get('texted');
     $userDb = DB::table('users')->where('id', $id)
                                 ->update(['status_ISO' => $status_iso]);
     return redirect()->action('AdminController@belum_terverifikasi_iso');
    }

    public function terverifikasi_iso(Request $request){
     $email = $request->session()->get('email');
     $userList = DB::table('users')->where('status_ISO', 'terverifikasi')->get();

        if($request->session()->get('login')) {
            return view('admin.terverifikasi-iso', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }
    }

    public function proses_batal_verifikasi_iso(Request $request){
 

     $id = $request->get('no');
     $status_iso = $request->get('texted');
     $userDb = DB::table('users')->where('id', $id)
                                 ->update(['status_ISO' => $status_iso]);
     return redirect()->action('AdminController@terverifikasi_iso');
    }

    public function belum_terverifikasi_pembayaran_iso(Request $request){
     $email = $request->session()->get('email');
     $userList = DB::table('users')->where('status_pembayaran_ISO', 'belum-terbayar')->get();

        if($request->session()->get('login')) {
            return view('admin.pembayaran-belum-terkonfirmasi-iso', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }
    }

    public function proses_verifikasi_pembayaran_iso(Request $request){
 

     $id = $request->get('no');
     $status_pembayaran_iso = $request->get('texted');
     $userDb = DB::table('users')->where('id', $id)
                                 ->update(['status_pembayaran_ISO' => $status_pembayaran_iso]);
     return redirect()->action('AdminController@belum_terverifikasi_pembayaran_iso');
    }

    public function terverifikasi_pembayaran_iso(Request $request){
     $email = $request->session()->get('email');
     $userList = DB::table('users')->where('status_pembayaran_ISO', 'terbayar')->get();

        if($request->session()->get('login')) {
            return view('admin.pembayaran-terkonfirmasi-iso', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }
    }


    public function proses_pembatalan_verifikasi_pembayaran_iso(Request $request){
 

     $id = $request->get('no');
     $status_pembayaran_iso = $request->get('texted');
     $userDb = DB::table('users')->where('id', $id)
                                 ->update(['status_pembayaran_ISO' => $status_pembayaran_iso]);
     return redirect()->action('AdminController@terverifikasi_pembayaran_iso');
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
