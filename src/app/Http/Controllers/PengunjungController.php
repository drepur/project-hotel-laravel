<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    //
    public function tampilpengunjung(){
        return view("pengunjung");
    }

    public function tampilform(){
        return view("pengunjung.form");
    }
}
