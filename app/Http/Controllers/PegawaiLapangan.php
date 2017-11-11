<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiLapangan extends Controller
{
    public function __construct() {
        $this->middleware('checkLogin');
        $this->middleware('isPegawaiLapangan');
    }



    public function dashboard(Request $request) {
        $id = $request->session()->get('id');
        $db = DB::table('pegawai_lapangan');
      
        if($request->session()->get('login')) {
            return view('pegawai-lapangan.dashboard');
        } else {
            return view('auth.login');
        }
    }
    //


    public function upload_hasil_survei(Request $request) {
        $id = $request->session()->get('id');
        $db = DB::table('users');
        
        if($request->session()->get('login')) {

            $check= $db->where([['petugas_inspeksi_ISO_id','=', $id],['surat_inspeksi_ISO','=',null],])->get();
            
            //dd($check);

            return view('pegawai-lapangan.upload-hasil-survei', array('nama_perusahaan'=>$check));
        } else {
            return view('auth.login');
        }
    }

    public function hapus_hasil_survei(Request $request) {
        $id = $request->session()->get('id');
       
        if($request->session()->get('login')) {
            
            return view('pegawai-lapangan.hapus-hasil-survei');
        } else {
            return view('auth.login');
        }
    }
}
