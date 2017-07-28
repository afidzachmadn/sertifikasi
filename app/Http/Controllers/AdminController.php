<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('checkLogin');
        $this->middleware('isAdmin');
    }

/* ------------------------------------ Kumpulan fungsi2 untuk ISO  ------------------------------ */ 
/* ------------------------------------------- -------------- ------------------------------------ */


    public function iso(Request $request){
      $email = $request->session()->get('email');
      
        if($request->session()->get('login')) {
            return view('admin.iso');
        } else {
            return view('auth.login-admin');
        }
   }




//---------------------------------------------------------------------------------------------//
     public function belum_terverifikasi_iso(Request $request){
     $email = $request->session()->get('email');
     $userList = DB::table('users')->where([['status_ISO','=','belum-terverifikasi'],['surat_pengesahan_ISO','!=','default-pengesahan-iso.pdf'],])->get();

        if($request->session()->get('login')) {
            return view('admin.belum-terverifikasi-iso', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }
    }

    public function proses_verifikasi_iso(Request $request){
 

     $id = $request->get('no');
     $userId = $request->session()->get('id');
     $status_iso = $request->get('texted');
     $userDb = DB::table('users')->where('id', $id)
                                 ->update(['status_ISO' => $status_iso,'Verifikator_ISO_name' => $userId]);

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
     $name = $request->session()->get('');
     $status_iso = $request->get('texted');
     $userDb = DB::table('users')->where('id', $id)
                                 ->update(['status_ISO' => $status_iso,'Verifikator_ISO_name' => $name,'surat_pengesahan_ISO'=>'default-pengesahan-iso.pdf']);
     return redirect()->action('AdminController@terverifikasi_iso');
    }
//----------------------------------------------------------------------------------------------//




//----------------------------------------------------------------------------------------------//
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
//------------------------------------------------------------------------------------------------//
   




//----------------------------------------------------------------------------------------------//
    public function upload_sertifikat_iso(Request $request){
     $email = $request->session()->get('email');
     $userList = DB::table('users')->where([['status_pembayaran_ISO','=','terbayar'],['surat_pengesahan_ISO','=','default-pengesahan-iso.pdf'],])->get();

        if($request->session()->get('login')) {
            return view('admin.upload-hasil-sertifikasi-iso', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }
    }

    public function proses_upload_sertifikat_iso(Request $request){
     $name = $request->get('nama-perusahaan');
     $hasil = $request->file('pdf-hasil-terbit-sertifikat-iso');
     $hasil_name = $hasil->hashName();
     $storeFile_hasil = $hasil->store('public/pdf/iso/hasil-terbit-sertifikat');
     
     $userDb = DB::table('users')->where('company_name', $name)
                                 ->update(['surat_pengesahan_ISO' => $hasil_name]);
     return redirect()->action('AdminController@upload_sertifikat_iso');

    }
//-----------------------------------------------------------------------------------------------//


/* ------------------------------------------------------------------------------------------------ */



/* ------------------------------------- Kumpulan fungsi2 untuk SNI -------------------------------- */
/* --------------------------------------------- -- -- --------------------------------------------- */

    public function sni(Request $request){
     $email = $request->session()->get('email');
        if($request->session()->get('login')) {
            return view('admin.sni');
        } else {
            return view('auth.login-admin');
        }
    }
//--------------------------------------------------------------------------------------------//
    public function belum_terverifikasi_pembayaran_sni(Request $request){
     $email = $request->session()->get('email');
     $userList = DB::table('users')->where('status_pembayaran_SNI', 'belum-terbayar')->get();

        if($request->session()->get('login')) {
            return view('admin.pembayaran-belum-terkonfirmasi-sni', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }
    }

    public function proses_verifikasi_pembayaran_sni(Request $request){
 

     $id = $request->get('no');
     $status_pembayaran_sni = $request->get('texted');
     $userDb = DB::table('users')->where('id', $id)
                                 ->update(['status_pembayaran_SNI' => $status_pembayaran_sni]);
     return redirect()->action('AdminController@belum_terverifikasi_pembayaran_sni');
    }

    public function terverifikasi_pembayaran_sni(Request $request){
     $email = $request->session()->get('email');
     $userList = DB::table('users')->where('status_pembayaran_SNI', 'terbayar')->get();

        if($request->session()->get('login')) {
            return view('admin.pembayaran-terkonfirmasi-sni', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }
    }


    public function proses_pembatalan_verifikasi_pembayaran_sni(Request $request){
 

     $id = $request->get('no');
     $status_pembayaran_sni = $request->get('texted');
     $userDb = DB::table('users')->where('id', $id)
                                 ->update(['status_pembayaran_SNI' => $status_pembayaran_sni]);
     return redirect()->action('AdminController@terverifikasi_pembayaran_sni');
    }
//----------------------------------------------------------------------------------------------//




//----------------------------------------------------------------------------------------------//
    public function upload_sertifikat_sni(Request $request){
     $email = $request->session()->get('email');
     $userList = DB::table('users')->where([['status_pembayaran_SNI','=','terbayar'],['surat_pengesahan_SNI','=','default-pengesahan-sni.pdf'],])->get();

        if($request->session()->get('login')) {
            return view('admin.upload-hasil-sertifikasi-sni', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }
    }

    public function proses_upload_sertifikat_sni(Request $request){
     $name = $request->get('nama-perusahaan');
     $hasil = $request->file('pdf-hasil-terbit-sertifikat-sni');
     $hasil_name = $hasil->hashName();
     $storeFile_hasil = $hasil->store('public/pdf/sni/hasil-terbit-sertifikat');
     
     $userDb = DB::table('users')->where('company_name', $name)
                                 ->update(['surat_pengesahan_SNI' => $hasil_name]);
     return redirect()->action('AdminController@upload_sertifikat_sni');

    }
//-----------------------------------------------------------------------------------------------//







//---------------------------------------------------------------------------------------------//
     public function belum_terverifikasi_sni(Request $request){
     $email = $request->session()->get('email');
     $userList = DB::table('users')->where([['status_SNI','=','belum-terverifikasi'],['surat_pengesahan_SNI','!=','default-pengesahan-sni.pdf'],])->get();

        if($request->session()->get('login')) {
            return view('admin.belum-terverifikasi-sni', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }
    }

    public function proses_verifikasi_sni(Request $request){
 

     $id = $request->get('no');
     $name = $request->session()->get('name');
     $status_sni = $request->get('texted');
     $userDb = DB::table('users')->where('id', $id)
                                 ->update(['status_SNI' => $status_sni,'Verifikator_SNI_name' => $name]);
     return redirect()->action('AdminController@belum_terverifikasi_sni');
    }

    public function terverifikasi_sni(Request $request){
     $email = $request->session()->get('email');
     $userList = DB::table('users')->where('status_SNI', 'terverifikasi')->get();

        if($request->session()->get('login')) {
            return view('admin.terverifikasi-sni', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }
    }

    public function proses_batal_verifikasi_sni(Request $request){
 

     $id = $request->get('no');
     $name = $request->session()->get('');
     $status_iso = $request->get('texted');
     $userDb = DB::table('users')->where('id', $id)
                                 ->update(['status_SNI' => $status_iso,'Verifikator_SNI_name' => $name,'surat_pengesahan_SNI'=>'default-pengesahan-sni.pdf']);
     return redirect()->action('AdminController@terverifikasi_sni');
    }
//----------------------------------------------------------------------------------------------//
/* ------------------------------------------------------------------------------------------------- */
}
