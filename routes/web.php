<?php

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
/* ----------------------------------------------------------------------------------- */