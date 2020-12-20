<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Cekout;

class CekoutController extends Controller
{
    //
    public function index(){
        return view('cekout',[
            "cekout" => Cekout::all()
        ]);
    }

    public function tampilform(){
        return view("cekout.form");
    }

    public function hapuscekout($id){

        Cekout::destroy($id);
        return redirect()->back();
    }

    public function buatcekout(Request $request){

        Cekout::create([
        "kodecekout" => $request->kodecekout,
        "kodecekin" => $request->kodecekin,
        "kodepesan" => $request->kodepesan,
        "tglcekout" => $request->tglcekout,
    ]);

        return redirect()->route("cekin");
    }
}
