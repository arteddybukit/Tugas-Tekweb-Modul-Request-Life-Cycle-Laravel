<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AritmatikaController extends Controller
{
    function index(){
        return view('Aritmatika');
    }

    function hasil(Request $request){

        $angka1 = $request->input('bil_1');
        $angka2 = $request->input('bil_2');
        $operator = $request->input('operator');
        $hasil = 0;

        if($operator==""){
            $hasil = $angka1 / $angka2;
        } else {
            $hasil = 0;
        }

        // echo $hasil;
        return redirect('/Aritmatika')->with('hasil', "Hasil : " .$hasil ." jam");
    }
}