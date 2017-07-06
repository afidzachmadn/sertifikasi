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
    return view('welcome');
});

// VIEW USER PAGE//
//----------------------------------------------//
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
});
Route::get('/user/iso', function () {
    return view('user.iso');
});
Route::get('/user/sni', function () {
    return view('user.sni');
});


Route::get('/user/profile', 'UserController@profile');

Route::get('/user/edit-profile', 'UserController@editProfileForm');

Route::post('/edit-profile-proses', "UserController@editProfile");
//---------------------------------------------//

// VIEW ADMIN PAGE //
//-------------------------------------------//
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/iso', function () {
    return view('admin.iso');
});
Route::get('/admin/sni', function () {
    return view('admin.sni');
});
Route::get('/admin/one-stop-service', function () {
    return view('admin.one-stop-service');
});
//-------------------------------------------//

Route::get('/register', "AuthController@register");

Route::get('/login', "AuthController@login");

Route::post('/login-proses', "AuthController@bacadatabase");

Route::post('/register-proses', "AuthController@registerproses");

Route::get('/user/dashboard', "HomeController@dashboard");



