<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekinController extends Controller
{
    //
    public function tampilcekin(){
        return view("cekin");
    }

    public function tampilform(){
        return view("cekin.form");
    }
}
