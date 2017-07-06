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

    public function editProfileForm(Request $request) {
        $id = $request->session()->get('id');

        $profileDb = DB::table('users');
        $profile = $profileDb->where('id', $id)->first();

        return view('user.profile-edit', array('profile' => $profile));
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
        return redirect()->action('UserController@profile');
    }
}
