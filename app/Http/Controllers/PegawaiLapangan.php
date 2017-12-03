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

            $check= $db->where([['petugas_inspeksi_ISO_ID','=', $id],['surat_inspeksi_ISO','=',null],])->get();

            $check_2= DB::table('users')->where([['petugas_inspeksi_SNI_ID','=', $id],['surat_inspeksi_SNI','=',null],])->get();
            
            //dd($id);
           // dd($check_2);

            return view('pegawai-lapangan.upload-hasil-survei', array('nama_perusahaan_iso'=>$check,'nama_perusahaan_sni'=>$check_2));
        } else {
            return view('auth.login');
        }
    }


    public function upload_hasil_survei_proses_iso(Request $request) {
        $name = $request->get('nama-perusahaan');
        $hasil = $request->file('hasil_upload');
        $hasil_name = $hasil->hashName();
        $storeFile_hasil = $hasil->store('public/pdf/iso/hasil-survei-lapangan');
        
        $userDb = DB::table('users')->where('company_name', $name)
                                    ->update(['surat_inspeksi_ISO' => $hasil_name]);
        return redirect()->action('PegawaiLapangan@upload_hasil_survei');
   
    }

    public function upload_hasil_survei_proses_sni(Request $request) {
        $name = $request->get('nama-perusahaan');
        $hasil = $request->file('hasil_upload');
        $hasil_name = $hasil->hashName();
        $storeFile_hasil = $hasil->store('public/pdf/sni/hasil-survei-lapangan');
        
        $userDb = DB::table('users')->where('company_name', $name)
                                    ->update(['surat_inspeksi_SNI' => $hasil_name]);
        return redirect()->action('PegawaiLapangan@upload_hasil_survei');
   
    }

    public function hapus_hasil_survei(Request $request) {
        $id = $request->session()->get('id');
       
        if($request->session()->get('login')) {

            $userList= DB::table('users')->where([['petugas_inspeksi_ISO_id','=', $id],['surat_inspeksi_ISO','!=',null],])->get();

            $userList_2= DB::table('users')->where([['petugas_inspeksi_SNI_id','=', $id],['surat_inspeksi_SNI','!=',null],])->get();

            //dd($userList_2);
            
            return view('pegawai-lapangan.hapus-hasil-survei', array('userList'=>$userList,'userList_2'=> $userList_2));
        } else {
            return view('auth.login');
        }
    }


    public function delete_hasil_survei_proses(Request $request) {
        $email = $request->get('email');
        
        
        $userDb = DB::table('users')->where('email', $email)
                                    ->update(['surat_inspeksi_ISO' => null]);
        return redirect()->action('PegawaiLapangan@hapus_hasil_survei');
   
    }

    public function pilihan(Request $request) {
        
        $id = $request->session()->get('id');
        
         if($request->session()->get('login')) {
 
             
             
             return view('pegawai-lapangan.pilihan');
         } else {
             return view('auth.login');
         }
   
    }
}
