<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class MetadatosController extends Controller
{
    //

    public function index(){
        return view ('metadatos.index');
        
    }

    public function show(){
        return view ('metadatos.vistas');
        
    }

    public function show1(){
        return view ('metadatos.tables');
        
    }

    public function show2(){
        return view ('metadatos.proc');
        
    }
}