<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    function index(){
        return view('admin_dashboard');
    }

    function siswaData(){
        return view('admin_dataSiswa');
    }
}