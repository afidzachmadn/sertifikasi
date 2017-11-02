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
 

     $no = $request->get('no');
     $id= $request->session()->get('id');
     $name = $request->session()->get('name');
     $status_iso = $request->get('texted');
     $userDb = DB::table('users')->where('id', $no)
                                 ->update(['status_ISO' => $status_iso,'Verifikator_ISO_name' => $name,'Verifikator_ID_ISO' => $id]);

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
                                 ->update(['status_ISO' => $status_iso,'Verifikator_ISO_name' => $name,'surat_pengesahan_ISO'=>'default-pengesahan-iso.pdf', 'Verifikator_ID_ISO' => '']);
     return redirect()->action('AdminController@terverifikasi_iso');
    }
//----------------------------------------------------------------------------------------------//




//----------------------------------------------------------------------------------------------//
    public function belum_terverifikasi_pembayaran_iso(Request $request){
     $email = $request->session()->get('email');
     $userList = DB::table('users')->where([['file_upload_bukti_pembayaran_ISO','!=',null],['status_pembayaran_ISO','=','belum-terbayar'],])->get();

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
     //dd($userList);

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
   


//---------------------------------------------------------------------------------------------//
    public function pegawai_inspeksi_iso(Request $request){
    // $email = $request->session()->get('email');
     $userList = DB::table('users')->where([['status_pembayaran_ISO','=','terbayar'],['surat_pengesahan_ISO','=','default-pengesahan-iso.pdf'],['petugas_inspeksi_ISO_name','=',null],])->get();
     $pegawaiList = DB::table('pegawai_lapangan')->get();
    
     //dd($pegawaiList);
     $status = '';
     

    

        if($request->session()->get('login')) {
            return view('admin.pilih-pegawai-inspeksi-iso', array('userList'=>$userList,'pegawaiList' => $pegawaiList, 'status'=>$status));
        } else {
            return view('auth.login-admin');
        }
    }

    public function pegawai_inspeksi_iso_proses(Request $request){
 

    $nip = $request->get('nip');
    $id = $request->get('no');
    //dd($nip);

    $pilihan_perusahaan=$request->get('pilihan-perusahaan');
    $nama_petugas_inspeksi_iso= DB::table('pegawai_lapangan')->where('nip',$nip)->get();
    $nama_petugas_inspeksi_iso_next = $nama_petugas_inspeksi_iso[0]->name;

    
    
    $userDb = DB::table('users')->where('company_name', $pilihan_perusahaan)
                                 ->update(['petugas_inspeksi_ISO_name' => $nama_petugas_inspeksi_iso_next,'petugas_inspeksi_nip_ISO' => $nip,'petugas_inspeksi_ISO_ID' => $id]);

    $inspeksiISOHitung = DB::table('users')->where('petugas_inspeksi_ISO_ID', $id)->count();

    $petugasDb = DB::table('pegawai_lapangan')->where('nip', $nip)
                                 ->update(['jumlah_total_pendaftar_ISO_yang_diverifikasi' => $inspeksiISOHitung]);

     return redirect()->action('AdminController@pegawai_inspeksi_iso');
    }

//--------------------------------------------------------------------------------------------//


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





//--------------------------------------------------------------------------------------------------//
public function riwayat_pegawai_ISO(Request $request){
    
}

public function riwayat_pegawai_ISO_process(Request $request){
     $email = $request->session()->get('email');
     $id = $request->get('no');
     //dd($id);

     $userList = DB::table('users')->where([['petugas_inspeksi_ISO_ID','=',$id],])->get();

    // $surat_inspeksi = DB::table('users')->where([['surat_inspeksi_ISO','=',null],['surat_inspeksi_ISO','!=',null],])->get();

     //dd($userList);

     //dd($surat_inspeksi);
     

        if($request->session()->get('login')) {
            return view('admin.riwayat-pegawai-inspeksi-iso', array('userList' => $userList));
        } else {
            return view('auth.login-admin');
        }

}

public function input_pegawai_ISO_process(Request $request){

    $nama_pegawai = $request->get('nama_pegawai');
    $nip = $request->get('nip');
    $jabatan = $request->get('jabatan');
    $total_pendaftar_iso_yang_diverifikasi = 0;
    $total_pendaftar_sni_yang_diverifikasi = 0;
   // dd($jabatan);

    $petugasDb = DB::table('pegawai_lapangan')->where('nip', $nip)
                                 ->insert(['jumlah_total_pendaftar_ISO_yang_diverifikasi' => $total_pendaftar_iso_yang_diverifikasi,
                                 'jumlah_total_pendaftar_SNI_yang_diverifikasi' =>
                                 $total_pendaftar_sni_yang_diverifikasi,
                                 'name' => $nama_pegawai,
                                 'nip' => $nip,
                                 'jabatan' => $jabatan,

                                 
                                 ]);

     return redirect()->action('AdminController@pegawai_inspeksi_iso');
    
}
//-------------------------------------------------------------------------------------------------// 


















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
     $userList = DB::table('users')->where([['file_upload_bukti_pembayaran_SNI','!=',null],['status_pembayaran_SNI','=','belum-terbayar'],])->get();

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
 

     $no = $request->get('no');
     $id= $request->session()->get('id');
     $name = $request->session()->get('name');
     $status_sni = $request->get('texted');
     $userDb = DB::table('users')->where('id', $no)
                                 ->update(['status_SNI' => $status_sni,'Verifikator_SNI_name' => $name,'Verifikator_ID_SNI' => $id]);

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
                                 ->update(['status_SNI' => $status_iso,'Verifikator_SNI_name' => $name,'surat_pengesahan_SNI'=>'default-pengesahan-sni.pdf', 'Verifikator_ID_SNI' => $id]);
     return redirect()->action('AdminController@terverifikasi_sni');
    }
//----------------------------------------------------------------------------------------------//
/* ------------------------------------------------------------------------------------------------- */
}

