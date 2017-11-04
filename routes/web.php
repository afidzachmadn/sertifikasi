<?php
use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->action('AuthController@login');

});

/* ------------------------------------------ VIEW USER PAGES ------------------------- */

Route::get('/user/dashboard', 'HomeController@dashboard')->middleware('checkLogin', 'isUser');;

Route::get('/user/iso', function () {
    return view('user.iso');
});
Route::get('/user/sni', function () {
    return view('user.sni');
});
Route::get('/user/profile', 'UserController@profile');

Route::get('/user/edit-profile', 'UserController@editProfileForm');

Route::post('/edit-profile-proses', "UserController@editProfile");

Route::get('/user/iso', 'UserController@iso');

Route::post('/iso-proses', "UserController@isoUploadFormProcess");

Route::get('/user/sni', 'UserController@sni');

Route::post('/sni-proses', "UserController@sniUploadFormProcess");

Route::get('/user/lihat-dokumen-iso', 'UserController@lihat_dokumen_iso');

Route::get('/user/upload-bukti-pembayaran-iso', 'UserController@pembayaran_iso');

Route::post('/user/upload-bukti-pembayaran-iso-proses', 'UserController@pembayaran_iso_proses');

Route::get('/user/lihat-dokumen-iso', 'UserController@lihat_dokumen_iso');

Route::get('/user/upload-bukti-pembayaran-sni', 'UserController@pembayaran_sni');

Route::post('/user/upload-bukti-pembayaran-sni-proses', 'UserController@pembayaran_sni_proses');

Route::get('/user/lihat-dokumen-sni', 'UserController@lihat_dokumen_sni');

Route::get('/user/tips', 'UserController@tips_penggunaan');

/* ------------------------------------------------------------------------------------------ */

/* ----------------------------------- VIEW ADMIN PAGES ------------------------------------ */

Route::get('/admin/dashboard', 'HomeController@dashboard_admin')->middleware('checkLogin', 'isAdmin');

Route::get('/admin/iso', 'AdminController@iso');

Route::get('/admin/sni', 'AdminController@sni');

//--------------------------------------------------------------------------------//





//---------------------------------------------------------------------------------------//
Route::get('/admin/belum-terverifikasi-iso', 'AdminController@belum_terverifikasi_iso');

Route::post('/verifikasi-iso-proses', "AdminController@proses_verifikasi_iso");

Route::get('/admin/terverifikasi-iso', 'AdminController@terverifikasi_iso');

Route::post('/verifikasi-batal-iso-proses', "AdminController@proses_batal_verifikasi_iso");
//---------------------------------------------------------------------------------//














//---------------------------------------------------------------------------------//
Route::get('/admin/pembayaran-belum-terkonfirmasi-iso', 'AdminController@belum_terverifikasi_pembayaran_iso');

Route::post('/konfirmasi-pembayaran-iso-proses', "AdminController@proses_verifikasi_pembayaran_iso");

Route::get('/admin/pembayaran-terkonfirmasi-iso', 'AdminController@terverifikasi_pembayaran_iso');

Route::post('/konfirmasi-pembatalan-pembayaran-iso-proses', "AdminController@proses_pembatalan_verifikasi_pembayaran_iso");
//----------------------------------------------------------------------------------//










//----------------------------------------------------------------------------------------//
Route::get('/admin/pilih-pegawai-inspeksi-iso', 'AdminController@pegawai_inspeksi_iso');
Route::post('/pegawai-inspeksi-iso-proses', "AdminController@pegawai_inspeksi_iso_proses");

Route::post('/riwayat-pegawai-inspeksi-iso-proses', "AdminController@riwayat_pegawai_ISO_process");

Route::post('/input-pegawai-inspeksi-iso-proses', "AdminController@input_pegawai_ISO_process");




//----------------------------------------------------------------------------------------//






//--------------------------------------------------------------------------------------//
Route::get('/admin/upload-sertifikat-iso', 'AdminController@upload_sertifikat_iso');

Route::post('/upload-hasil-terbit-sertifikat-iso', "AdminController@proses_upload_sertifikat_iso");
//--------------------------------------------------------------------------------------//



//------------------------------------------------------------------------------------//
Route::get('/admin/pembayaran-belum-terkonfirmasi-sni', 'AdminController@belum_terverifikasi_pembayaran_sni');

Route::post('/konfirmasi-pembayaran-sni-proses', "AdminController@proses_verifikasi_pembayaran_sni");

Route::get('/admin/pembayaran-terkonfirmasi-sni', 'AdminController@terverifikasi_pembayaran_sni');

Route::post('/konfirmasi-pembatalan-pembayaran-sni-proses', "AdminController@proses_pembatalan_verifikasi_pembayaran_sni");
//-------------------------------------------------------------------------------------//



//--------------------------------------------------------------------------------------//
Route::get('/admin/upload-sertifikat-sni', 'AdminController@upload_sertifikat_sni');

Route::post('/upload-hasil-terbit-sertifikat-sni', "AdminController@proses_upload_sertifikat_sni");
//--------------------------------------------------------------------------------------//





//--------------------------------------------------------------------------------//
Route::get('/admin/belum-terverifikasi-sni', 'AdminController@belum_terverifikasi_sni');

Route::post('/verifikasi-sni-proses', "AdminController@proses_verifikasi_sni");

Route::get('/admin/terverifikasi-sni', 'AdminController@terverifikasi_sni');

Route::post('/verifikasi-batal-sni-proses', "AdminController@proses_batal_verifikasi_sni");
//---------------------------------------------------------------------------------//



/* ------------------------------------------------------------------------------------------ */

/*-------------------------------- ESSENTIAL--------------------------------------------- */

Route::get('/register', "AuthController@register");

Route::get('/login', "AuthController@login");

Route::get('/logout', "AuthController@logout");

Route::post('/login-proses', "AuthController@bacadatabase");

Route::post('/register-proses', "AuthController@registerproses");



Route::get('/login-admin', "AuthController@login_admin");

Route::get('/logout-admin', "AuthController@logout_admin");

Route::post('/login-proses-admin', "AuthController@bacadatabase_admin");


Route::get('/login-pegawai-lapangan', "AuthController@login_pegawai_lapangan");

Route::get('/logout-pegawai-lapangan', "AuthController@logout_pegawai_lapangan");

Route::post('/login-proses-pegawai-lapangan', "AuthController@bacadatabase_pegawai_lapangan");


/* ----------------------------------------------------------------------------------- */



Route::any('captcha-test', function()
{
        if (Request::getMethod() == 'POST')
        {
                $rules = ['captcha' => 'required|captcha'];
                $validator = Validator::make(Input::all(), $rules);
                if ($validator->fails())
                {
                        echo '<p style="color: #ff0000;">Incorrect!</p>';
                }
                else
                {
                        echo '<p style="color: #00ff30;">Matched :)</p>';
                }
        }

        $form = '<form method="post" action="captcha-test">';
        $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        $form .= '<p>' . captcha_img() . '</p>';
        $form .= '<p><input type="text" name="captcha"></p>';
        $form .= '<p><button type="submit" name="check">Check</button></p>';
        $form .= '</form>';
        return $form;
});




//pegawailapangan

Route::get('/pegawailapangan/dashboard', 'PegawaiLapangan@dashboard')->middleware('checkLogin', 'isPegawaiLapangan');;