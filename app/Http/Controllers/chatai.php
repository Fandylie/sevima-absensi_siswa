<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chatai extends Controller
{
    //
    function index(request $request){

        return $request->text;


    }
}
