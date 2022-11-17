<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformationSchemaViews;
use App\Http\Resources\ViewResource;

class viewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index(){
        $views = InformationSchemaViews::All();

        return  ViewResource::collection($views);
    }
}
