<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_siswa;
use App\Models\tb_absen;
use Illuminate\Support\Facades\Mail;
use App\mail\kirimemail;


class absenControler extends Controller
{
    //
    function index(){
        return view('siswa_absen');
    }

    function absen(request $request){
        
        $request->validate([
            'nis' => 'required',
            'password' => 'required',
        ],[
            'nis.required' => 'NIS Belum Di Isi',
            'password.required' => 'Password Belum Di Isi'
        ]);


        if (tb_absen::where('nis',$request->nis)->where('tanggalabsen', date('Y-m-d'))->first()) {
            return redirect()->back()->withInput()->with('danger','Sudah melakukan absen hari ini, Silahkan absen besok lagi');
        }



        if(tb_siswa::where('nis',$request->nis)->where('password', $request->password)->first()){
            
            $ip = file_get_contents('https://api.ipify.org');
            $lokasiIP = \Location::get($ip);

            $lokasi = $lokasiIP->countryName.','. $lokasiIP->regionName.','. $lokasiIP->cityName;

            $data = [

                'nis' => $request->nis,
                'tanggalabsen' => date('Y-m-d'),
                'tempatabsen' => $lokasi,

            ];

            
            tb_absen::create($data);
            
            // Mail::to('fandiadisaputra53@gmail.com')->send(new kirimemail);

        }
        return redirect()->back()->withInput()->with('danger','NIS atau Password salah');


    }
}
