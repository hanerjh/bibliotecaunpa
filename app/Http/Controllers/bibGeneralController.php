<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bibGeneralController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function equipo()
     {
        
         $equipo=DB::table('personal')
         ->join('cargos','personal.fkidcargo','=','cargos.id')
         ->get();         
        return view('publico.equipotrabajo',compact('equipo'));
    }

    public function about()
     {
        
         $colecciones=DB::table('colecciones')->get();         
        return view('publico.about',compact('colecciones'));
    }

}
