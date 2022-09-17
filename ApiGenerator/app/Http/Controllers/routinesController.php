<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformationSchemaRoutines;

class routinesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index(){
        $routines = InformationSchemaRoutines::All();

        return  $routines;
    }
}
