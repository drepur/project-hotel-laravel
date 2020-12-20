<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Cekin;

class CekinController extends Controller
{
    //
    public function index(){
        return view('cekin',[
            "cekin" => Cekin::all()
        ]);
    }

    public function tampilform(){
        return view("cekin.form");
    }

    public function hapuscekin($id){

        Cekin::destroy($id);
        return redirect()->back();
    }


    public function buatcekin(Request $request){

        Cekin::create([
        "kodecekin" => $request->kodecekin,
        "kodepesan" => $request->kodepesan,
        "kodekamar" => $request->kodekamar,
        "tglmasuk" => $request->tglmasuk,
        "tglkeluar" => $request->tglkeluar
    ]);

        return redirect()->route("cekout");
    }
}
