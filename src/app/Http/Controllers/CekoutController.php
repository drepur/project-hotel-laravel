<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekoutController extends Controller
{
    //
    public function tampilcekout(){
        return view("cekout");
    }

    public function tampilform(){
        return view("cekout.form");
    }
}
