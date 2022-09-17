<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformationSchemaViews;

class viewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index(){
        $views = InformationSchemaViews::All();
        return  $views;
    }
}
