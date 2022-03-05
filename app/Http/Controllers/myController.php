<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{

    public function detalle(){
        return view ('tiempo.detalle');
    }

    public function redirigir(){
        return redirect()->action('myController@detalle');
    }

    public function formulario(){
        return view('tiempo.formulario');
    }

    public function recibir(Request $request){
        $cp = $request->input('cp');

        return "El cp es: $cp";
        die();
    }
}


