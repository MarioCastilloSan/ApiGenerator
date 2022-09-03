<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class getInfoController extends Controller
{
    //
    public function getInfo(Request $request)
    {
        //get all table from database
        $tables = DB::table('INFORMATION_SCHEMA.TABLES')
        ->get();
        return view('index', ['tables' => $tables]);
    }
}
