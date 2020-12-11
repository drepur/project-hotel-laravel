<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    //
    public function tampilpemesanan(){
        return view("pemesanan");
    }

    public function tampilform(){
        return view("pemesanan.form");
    }
}
