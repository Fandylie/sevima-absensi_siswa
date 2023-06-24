<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\tb_siswa;


class adminController extends Controller
{
    //
    function index(){

        return view('admin_dashboard')->with([
            'dashboard' => true,
        ]);
    }

}
