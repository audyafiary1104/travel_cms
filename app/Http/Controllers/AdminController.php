<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminController extends Controller
{
   public function login()
   {
       return view('login');
   }
   public function post_login(Request $request)
   {
       $data = DB::table('admin')->where('username',$request->username)->first();
       if($data){
            Session::put('id_admin',$data->id_admin);
            Session::put('username',$data->username);
            Session::put('login_admin',TRUE);
            return redirect()->route('index_admin');
    }
    else{
        return redirect()->route('login_admin')->with('alert','Password atau Username, Tidak Ditemukan!');
    }  
   }
   public function logout()
   {
    Session::flush();
    return redirect()->route('login_admin')->with('alert','Kamu SUdah Logout');
}
}
