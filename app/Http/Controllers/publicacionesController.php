<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class publicacionesController extends Controller
{
    
     /**
     * Muestra las noticias.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post($id)
    {
       
        $noticia=DB::table('publicaciones')->where('id',"=",$id)->first();
        $listanoticias=DB::table('publicaciones')
        ->where('fk_idtipopublicacion',"<>",3)
        ->limit(6)
        ->orderBy('created_at','desc')
        ->get();
        
        return view('publico.noticia_desarrollo',compact('noticia','listanoticias'));

    }

    public function noticias()
    {
       
       
        $noticias=DB::table('publicaciones')->where('fk_idtipopublicacion',"<>",3)->limit(6)->orderBy('id', 'desc')->paginate(6);
        return view('publico.gridnoticias',compact('noticias'));

    }
}
