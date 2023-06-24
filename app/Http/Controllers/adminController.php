<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\tb_siswa;
use App\Models\tb_absen;


class adminController extends Controller
{
    //
    function index(){

        return view('admin_dashboard')->with([
           'title' =>'Dashboard',
            'dashboard' => true,
        ]);
    }

    function rekap(){

        $data = tb_absen::groupby('tanggalabsen')->get();
        return view('admin_rekap_siswa')->with([
            'title' =>'Rekap',
            'rekap' =>true,
            'data' => $data,
            'jumlah'=>$data
        ]);
    }
    
}
