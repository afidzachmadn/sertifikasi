<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

   public function dashboardYesLogin(Request $request) {
           if($request->session()->get('login')) {
            return view('user.dashboard');
        } else {
            return view('auth.login');
        }
   }

/* ---------------------------------  AGAR TIDAK BISA BYPASS TANPA LOGIN ------------------ */ 

   public function dashboardNoLogin(Request $request) {
           if($request->session()->get('login')) {
            return view('user.dashboard');
        } else {
            return view('auth.login');
        }
   }
   public function profileNoLogin(Request $request) {
           if($request->session()->get('login')) {
            return view('user.profile');
        } else {
            return view('auth.login');
        }
   }
   public function editProfileNoLogin(Request $request) {
           if($request->session()->get('login')) {
            return view('user.profile-edit');
        } else {
            return view('auth.login');
        }
   }
   public function isoNoLogin(Request $request) {
           if($request->session()->get('login')) {
            return view('user.iso');
        } else {
            return view('auth.login');
        }
   }
   public function sniNoLogin(Request $request) {
           if($request->session()->get('login')) {
            return view('user.sni');
        } else {
            return view('auth.login');
        }
   }
/* ---------------------------------------------------------------------------------- */
}
