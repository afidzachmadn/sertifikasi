<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

   public function dashboard(Request $request) {
        $id = $request->session()->get('id');

        $statusVer = DB::table('users');
        $status_iso = $statusVer->where('id', $id)->first();
        $status_sni = $statusVer->where('id', $id)->first();

        $status_pembayaran_iso = $statusVer->where('id',$id)->first();
        $status_pembayaran_sni = $statusVer->where('id',$id)->first();

           if($request->session()->get('login')) {
            return view('user.dashboard',array('status_iso' => $status_iso,'status_sni' => $status_sni,'status_pembayaran_iso' => $status_pembayaran_iso,'status_pembayaran_sni' => $status_pembayaran_sni));
        } else {
            return view('auth.login');
        }
   }

   public function dashboard_admin(Request $request) {
       $id = $request->session()->get('id');
       $db = DB::table('users');
       $verifiedIso = $db->where('Verifikator_ID_ISO', $id)->count();
       $verifiedSni = $db->where('Verifikator_ID_SNI', $id)->count();

       $db_admin = DB::table('admin')->where('id',$id)
                                 ->update(['jumlah_total_pendaftar_ISO_yang_diverifikasi' => $verifiedIso,'jumlah_total_pendaftar_SNI_yang_diverifikasi' => $verifiedSni]);

       if($request->session()->get('login')) {
           return view('admin.dashboard', array('verifiedIso' => $verifiedIso, 'verifiedSni' => $verifiedSni));
       } else {
           return view('auth.login');
       }
   }
}
