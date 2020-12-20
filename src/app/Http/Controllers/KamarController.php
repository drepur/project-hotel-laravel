<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Kamar;

class KamarController extends Controller
{

    //
    public function tampilform(){
        return view("kamar.form");
    }

    public function hapuskamar($id){

        Kamar::destroy($id);
        return redirect()->back();
    }


    public function buatkamar(Request $request){



            Kamar::create([
            "kodepegawai" => \Auth()->id(),
            "jeniskamar" => $request->jeniskamar,
            "tipe" => $request->tipe,
            "fasilitas" => $request->fasilitas,
            "tarifkamar" => $request->tarifkamar
        ]);

        return redirect()->route("home");
    }
}
