<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //
    public function tampilkaryawan(){
        return view("karyawan");
    }

    public function tampilform(){
        return view("karyawan.form");
    }
}
