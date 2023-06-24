<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class sesionControler extends Controller
{
    //
    function index(){
        return view('login_admin')->with([
            'title'=>'Login'
        ]);
    }
    
    function ceklogin(request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'User Name harus di isi',
            'password.required' => 'Password harus di isi'
        ]); 

        $infologin = [
            'username' => $request->username,
            'password' => $request->password 
        ];

        if(Auth::attempt($infologin)){
            return redirect('admin');
        }
        
        return redirect()->back()->with('danger','User Name atau Password salah');
        
    }
    
    function logout(){
        Auth::logout();
        return  redirect('admin/login');
    }


}
