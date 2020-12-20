<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Pengunjung;

class PengunjungController extends Controller
{
    //
    public function index(){
        return view('pengunjung',[
            "pengunjung" => Pengunjung::all()
        ]);
    }

    public function tampilform(){
        return view("pengunjung.form");
    }

    public function hapuspengunjung($id){

        Pengunjung::destroy($id);
        return redirect()->back();
    }

    public function buatpengunjung(Request $request){

        Pengunjung::create([
        "kodepengunjung" => \Auth()->id(),
        "nama" => $request->nama,
        "alamat" => $request->alamat,
        "tgllahir" => $request->tgllahir,
        "jeniskelamin" => $request->jeniskelamin,
        "nohp" => $request->nohp,
        "noktp" => $request->noktp
    ]);

        return redirect()->route("pengunjung");
    }
}
