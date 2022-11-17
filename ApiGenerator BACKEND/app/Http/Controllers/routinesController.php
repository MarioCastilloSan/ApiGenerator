<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformationSchemaRoutines;
use App\Http\Resources\RoutinesResource;

class routinesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index(){
        $routines = InformationSchemaRoutines::All();

        return  RoutinesResource::collection($routines);
    }
}
