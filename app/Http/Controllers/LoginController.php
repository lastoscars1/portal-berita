<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanLogin(){
        return view ('Login.Login-aplikasi');
    }

     public function postLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/beranda');
        }
        return redirect('/login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
       
    }
}
