<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Karyawan;

class KaryawanController extends Controller
{
    //
    public function index(){
        return view('karyawan',[
            "karyawan" => Karyawan::all()
        ]);
    }

    public function tampilform(){
        return view("karyawan.form");
    }

    public function hapuskaryawan($id){

        Karyawan::destroy($id);
        return redirect()->back();
    }

    public function buatkaryawan(Request $request){

        Karyawan::create([
        "kodekaryawan" => $request->kodekaryawan,
        "nama" => $request->nama,
        "alamat" => $request->alamat,
        "tgllahir" => $request->tgllahir,
        "jeniskelamin" => $request->jeniskelamin,
        "nohp" => $request->nohp,
        "bagian" => $request->bagian
    ]);

        return redirect()->route("karyawan");
    }
}
