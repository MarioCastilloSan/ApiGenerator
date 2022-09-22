<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformationSchemaTables;
use App\Http\Resources\TablesResource;

class tablesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public static  function index(){
        $tables = InformationSchemaTables::All()
        ->where('TABLE_TYPE', 'BASE TABLE');
        
        return  TablesResource::collection($tables);
    }
}
