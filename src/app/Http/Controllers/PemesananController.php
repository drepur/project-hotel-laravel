<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Pemesanan;

class PemesananController extends Controller
{
    //
    public function index(){
        return view('pemesanan',[
            "pemesanan" => Pemesanan::all()
        ]);
    }

    public function tampilform(){
        return view("pemesanan.form");
    }

    public function hapuspemesanan($id){

        Pemesanan::destroy($id);
        return redirect()->back();
    }

    public function buatpemesanan(Request $request){

        Pemesanan::create([
        "kodepengunjung" => $request->kodepengunjung,
        "kodekamar" => $request->kodekamar,
        "tglpesan" => $request->tglpesan,
        "lamanginap" => $request->lamanginap
    ]);

        return redirect()->route("pemesanan");
    }
}
