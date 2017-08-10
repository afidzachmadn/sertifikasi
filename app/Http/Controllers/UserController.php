<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {

    public function __construct() {
        $this->middleware('checkLogin');
        $this->middleware('isUser');
    }



/* ---------------------------- UNTUK PROFILE PAGE DAN EDIT-PROFILE PAGE -------------------------*/

    public function profile(Request $request) {
        $id = $request->session()->get('id');

        $lihatDokumenSni = DB::table('users');
        $dokumen_sni = $lihatDokumenSni->where('id', $id)->first();
        
        return view('user.profile', array('profile' => $dokumen_sni));
    }

    public function editProfileForm(Request $request) {
        $id = $request->session()->get('id');

        $lihatDokumenSni = DB::table('users');
        $dokumen_sni = $lihatDokumenSni->where('id', $id)->first();

        return view('user.profile-edit', array('profile' => $dokumen_sni));
    }

    public function editProfile(Request $request) {
        // dd($request->img->hashName());
        $id = $request->session()->get('id');
        $name = $request->get('company_name');
        $email = $request->get('email');
        $telp = $request->get('telp');
        $address = $request->get('address');
        $description = $request->get('description');
        $file = $request->file('img');
        $fileName = $file->hashName();
        $storeFile = $file->store('public/img');

        $userDb = DB::table('users')->where('id', $id)
                                    ->update(['company_name' => $name, 'email' => $email, 'telp' => $telp, 'address' => $address, 'description' => $description, 'img_url' => $fileName]);
        $request->session()->put('img_url', $fileName);
        return redirect()->action('UserController@profile');
    }

/* ----------------------------------------------------------------------------------------------- */

/* ------------------------------------------ UNTUK ISO PAGE ------------------------------------ */

    public function iso(Request $request){
        $id = $request->session()->get('id');

        $isoDb = DB::table('users');
        $iso_p = $isoDb->where('id', $id)->first();
        
        return view('user.iso', array('iso_p' => $iso_p));
        //return view('user.iso');
    }

 

    public function isoUploadFormProcess(Request $request) {
        $id = $request->session()->get('id');
        $iso_1 = $request->file('pdf-iso-1');
        $iso_1_name = $iso_1->hashName();
        $storeFile_iso_1 = $iso_1->store('public/pdf/iso');

        $iso_2 = $request->file('pdf-iso-2');
        $iso_2_name = $iso_2->hashName();
        $storeFile_iso_2 = $iso_2->store('public/pdf/iso');
        
        $iso_3 = $request->file('pdf-iso-3');
        $iso_3_name = $iso_3->hashName();
        $storeFile_iso_3 = $iso_3->store('public/pdf/iso');
        
        $iso_4 = $request->file('pdf-iso-4');
        $iso_4_name = $iso_4->hashName();
        $storeFile_iso_4 = $iso_4->store('public/pdf/iso');
        
        $iso_5 = $request->file('pdf-iso-5');
        $iso_5_name = $iso_5->hashName();
        $storeFile_iso_5 = $iso_5->store('public/pdf/iso');
        
        $iso_6 = $request->file('pdf-iso-6');
        $iso_6_name = $iso_6->hashName();
        $storeFile_iso_6 = $iso_6->store('public/pdf/iso');

        $userDb = DB::table('users')->where('id', $id)
                                   /* ->update(['company_name' => $name, 'email' => $email, 'telp' => $telp, 'address' => $address, 'description' => $description, 'img_url' => $fileName]); */
                                    ->update(['file_upload_iso_1' => $iso_1_name, 'file_upload_iso_2' => $iso_2_name, 'file_upload_iso_3' => $iso_3_name, 'file_upload_iso_4' => $iso_4_name, 'file_upload_iso_5' => $iso_5_name, 'file_upload_iso_6' => $iso_6_name ]);
       // $request->session()->put('img_url', $fileName);
        $request->session()->put('file_upload_iso_1');
        $request->session()->put('file_upload_iso_2');
        $request->session()->put('file_upload_iso_3');
        $request->session()->put('file_upload_iso_4');
        $request->session()->put('file_upload_iso_5');
        $request->session()->put('file_upload_iso_6');

        return redirect()->action('UserController@iso');
    }

    public function lihat_dokumen_iso(Request $request) {
        $id = $request->session()->get('id');

        $lihatDokumenIso = DB::table('users');
        $dokumen_iso = $lihatDokumenIso->where('id', $id)->first();
        
        $iso_1 = $dokumen_iso->file_upload_iso_1;
        $iso_2 = $dokumen_iso->file_upload_iso_2;
        $iso_3 = $dokumen_iso->file_upload_iso_3;
        $iso_4 = $dokumen_iso->file_upload_iso_4;
        $iso_5 = $dokumen_iso->file_upload_iso_5;
        $iso_6 = $dokumen_iso->file_upload_iso_6;

        if($iso_1 && $iso_2 && $iso_3 && $iso_4 && $iso_5 && $iso_6 != null){
            return view('user.lihat-dokumen-iso', array('dokumen_iso' => $dokumen_iso));
        }
        else{
            
             return redirect()->action('UserController@iso');
        }        
    }



    public function pembayaran_iso(Request $request){
        $id = $request->session()->get('id');

        $iso_pembayaran = DB::table('users');
        $iso_pembayaran_p = $iso_pembayaran->where('id', $id)->first();
        
        return view('user.upload-bukti-pembayaran-iso', array('iso_pembayaran_p' => $iso_pembayaran_p));
    }
    public function pembayaran_iso_proses(Request $request) {
        $id = $request->session()->get('id');

        $iso_pembayaran = $request->file('pdf-bukti-pembayaran-iso');
        $iso_pembayaran_name = $iso_pembayaran->hashName();
        $storeFile_iso_pembayaran = $iso_pembayaran->store('public/img/bukti-pembayaran/iso');
        $userDb = DB::table('users')->where('id', $id)
                                    ->update(['file_upload_bukti_pembayaran_ISO' => $iso_pembayaran_name]);
        $request->session()->put('file_upload_bukti_pembayaran_ISO');
        return redirect()->action('UserController@pembayaran_iso');
        
    }

/* ------------------------------------------------------------------------------------------- */

/* ------------------------------------------- UNTUK SNI PAGE ----------------------------------- */

 public function sni(Request $request){
        $id = $request->session()->get('id');

        $sniDB = DB::table('users');
        $sni_p = $sniDB->where('id', $id)->first();
        
        return view('user.sni', array('sni_p' => $sni_p));
       
    }


    public function sniUploadFormProcess(Request $request) {
      
       $id = $request->session()->get('id');
        

        $sni_1 = $request->file('pdf-sni-1');
        $sni_1_name = $sni_1->hashName();
        $storeFile_sni_1 = $sni_1->store('public/pdf/sni');

        $sni_2 = $request->file('pdf-sni-2');
        $sni_2_name = $sni_2->hashName();
        $storeFile_sni_2 = $sni_2->store('public/pdf/sni');
        
        $sni_3 = $request->file('pdf-sni-3');
        $sni_3_name = $sni_3->hashName();
        $storeFile_sni_3 = $sni_3->store('public/pdf/sni');
        
        $sni_4 = $request->file('pdf-sni-4');
        $sni_4_name = $sni_4->hashName();
        $storeFile_sni_4 = $sni_4->store('public/pdf/sni');
        
        $sni_5 = $request->file('pdf-sni-5');
        $sni_5_name = $sni_5->hashName();
        $storeFile_sni_5 = $sni_5->store('public/pdf/sni');

        $sni_6 = $request->file('pdf-sni-6');
        $sni_6_name = $sni_6->hashName();
        $storeFile_sni_6 = $sni_6->store('public/pdf/sni');


        $userDb = DB::table('users')->where('id', $id)
                                    ->update(['file_upload_sni_1' => $sni_1_name, 'file_upload_sni_2' => $sni_2_name, 'file_upload_sni_3' => $sni_3_name, 'file_upload_sni_4' => $sni_4_name, 'file_upload_sni_5' => $sni_5_name, 'file_upload_sni_6' => $sni_6_name ]);
      
        $request->session()->put('file_upload_sni_1');
        $request->session()->put('file_upload_sni_2');
        $request->session()->put('file_upload_sni_3');
        $request->session()->put('file_upload_sni_4');
        $request->session()->put('file_upload_sni_5');
        $request->session()->put('file_upload_sni_6');

        return redirect()->action('UserController@sni');
    }

public function lihat_dokumen_sni(Request $request) {
        $id = $request->session()->get('id');

        $lihatDokumenSni = DB::table('users');
        $dokumen_sni = $lihatDokumenSni->where('id', $id)->first();

        $sni_1 = $dokumen_sni->file_upload_sni_1;
        $sni_2 = $dokumen_sni->file_upload_sni_2;
        $sni_3 = $dokumen_sni->file_upload_sni_3;
        $sni_4 = $dokumen_sni->file_upload_sni_4;
        $sni_5 = $dokumen_sni->file_upload_sni_5;
        $sni_6 = $dokumen_sni->file_upload_sni_6;

        if($sni_1 && $sni_2 && $sni_3 && $sni_4 && $sni_5 && $sni_6 != null){
            return view('user.lihat-dokumen-sni', array('dokumen_sni' => $dokumen_sni));
        }
        else{
            
             return redirect()->action('UserController@sni');
        }        
        
        return view('user.lihat-dokumen-sni', array('dokumen_sni' => $dokumen_sni));
    }

    public function pembayaran_sni(Request $request){
        $id = $request->session()->get('id');

        $sni_pembayaran = DB::table('users');
        $sni_pembayaran_p = $sni_pembayaran->where('id', $id)->first();
        
        return view('user.upload-bukti-pembayaran-sni', array('sni_pembayaran_p' => $sni_pembayaran_p));
    }
    public function pembayaran_sni_proses(Request $request) {
        $id = $request->session()->get('id');

        $sni_pembayaran = $request->file('pdf-bukti-pembayaran-sni');
        $sni_pembayaran_name = $sni_pembayaran->hashName();
        $storeFile_sni_pembayaran = $sni_pembayaran->store('public/img/bukti-pembayaran/sni');
        $userDb = DB::table('users')->where('id', $id)
                                    ->update(['file_upload_bukti_pembayaran_SNI' => $sni_pembayaran_name]);
        $request->session()->put('file_upload_bukti_pembayaran_SNI');
        return redirect()->action('UserController@pembayaran_sni');
        
    }
/* ------------------------------------- TIPS PENGGUNAAN PAGE ---------------------------------- */

public function tips_penggunaan(Request $request){
        $id = $request->session()->get('id');

        $tipsDB = DB::table('users');
        $tips_p = $tipsDB->where('id', $id)->first();
        
        return view('user.tips', array('tips_p' => $tips_p));
       
    }
}
