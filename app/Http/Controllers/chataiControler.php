<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_chatai;


class chataiControler extends Controller
{
    //
    
    function index(request $request){

        $query = tb_chatai::where('pertanyaan','like','%'. $request->text .'%')->first();
      
        
        
        if ($query != null) {
            $jawaban = $query->jawaban;
            return $jawaban;
            
        }
        return 'Chat dalam masa pengembangan tidak bisa melayani pertanyaan anda';


    }
}
