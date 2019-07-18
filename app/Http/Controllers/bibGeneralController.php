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

    public function enlaces_interes()
     {
        
         $recursos=DB::table('recursos')
          ->where('estado',1)->get();         
        return view('publico.recursos.enlaces_interes',compact('recursos'));
    }

    public function gestoresbibliograficos()
     {
        
         $recursos=DB::table('recursos')
         ->where('tipo_recursos_id',4)
         ->get();         
        return view('publico.recursos.gestoresbibliograficos',compact('recursos'));
    }

}
