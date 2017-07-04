<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile(Request $request) {
        $id = $request->session()->get('id');

        $profileDb = DB::table('users');
        $profile = $profileDb->where('id', $id)->first();
        
        return view('user.profile', array('profile' => $profile));
    }
}
