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
}
