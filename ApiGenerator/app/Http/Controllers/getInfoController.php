<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class getInfoController extends Controller
{
    //echo hola

    public function returnData(Request $request)
    {
        $queryTable = DB::table('INFORMATION_SCHEMA.TABLES')->select('TABLE_NAME', 'TABLE_TYPE')
        ->where('TABLE_TYPE','BASE TABLE')
        ->get();
        $queryView=DB::table('INFORMATION_SCHEMA.TABLES')->select('TABLE_NAME', 'TABLE_TYPE')
        ->where('TABLE_TYPE','VIEW')
        ->get();
        $querySP = DB::table('INFORMATION_SCHEMA.ROUTINES')->select('ROUTINE_NAME', 'ROUTINE_TYPE')
        ->where('ROUTINE_TYPE','PROCEDURE')
        ->get();

        return view('index', 
                    array('tables' => $queryTable,
                          'View' => $queryView ,
                          'SProcedure' => $querySP));
    }

    public function filterData(){

        $queryTable = DB::table('INFORMATION_SCHEMA.TABLES')->select('TABLE_NAME', 'TABLE_TYPE')
        ->where('TABLE_TYPE','BASE TABLE')
        ->get();
        $queryView=DB::table('INFORMATION_SCHEMA.TABLES')->select('TABLE_NAME', 'TABLE_TYPE')
        ->where('TABLE_TYPE','VIEW')
        ->get();
        $querySP = DB::table('INFORMATION_SCHEMA.ROUTINES')->select('ROUTINE_NAME', 'ROUTINE_TYPE')
        ->where('ROUTINE_TYPE','PROCEDURE')
        ->get();

        return (
        array('tables' => $queryTable,
              'View' => $queryView ,
              'SProcedure' => $querySP));
    }
}
