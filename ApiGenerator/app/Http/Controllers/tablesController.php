<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformationSchemaTables;

class tablesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(){
        $tables = InformationSchemaTables::All()
        ->where('TABLE_TYPE', 'BASE TABLE');
        return  $tables;
    }
}
