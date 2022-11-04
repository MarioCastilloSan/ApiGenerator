<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class apicontroller extends Controller

{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $texto=trim($request->get('texto'));
        $idc=DB::table('cliente')
                   ->select('id')
                   ->get();
        $idv=DB::table('vista')
                   ->select('id')
                   ->get();
        $idp=DB::table('procedimientos')
                   ->select('id')
                   ->get();
       
        return view('apigen.index',compact('idc','idv','idp'));
        
        
    }
}