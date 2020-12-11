<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    //
    public function tampilform(){
        return view("kamar.form");
    }
}
