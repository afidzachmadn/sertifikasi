<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile(Request $request) {
        $username = $request->session()->get('username');

        $perusahaanDb = DB::table('profile_perusahaan');
        $perusahaan = $perusahaanDb->where('username', $username)->first();

        return view('user.profile', array('perusahaan' => $perusahaan));
    }
}
