<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{

    public function detalle(){
        return view ('tiempo.detalle');
    } 

    public function redirigir(){
        return redirect()->route('myController.detalle');
    }

    public function formulario(){
        return view('tiempo.formulario');
    }

    public function recibir(Request $request){
        $cp = $request->input('cp');

        return view('tiempo.detalle');
    }
}


