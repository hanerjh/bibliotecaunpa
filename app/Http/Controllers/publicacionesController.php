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

    public function eventos()
    {
        $eventos=DB::table('eventos')
        ->join('tipoeventos','tipoeventos.id','=','tpeventos_id')
        ->limit(3)
        ->orderBy('eventos.id','desc')
        ->select('img','titulo','contenido','eventos.id as id','tipo_evento','eventos.created_at as publicado')
        ->paginate(6);
             
        return view('publico.grideventos',compact('eventos'));

    }

        /**
     * Muestra las noticias.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post_evento($id)
    {
   
       
        $evento=DB::table('eventos')->where('id',"=",$id)->first();
   
        $listanoticias=DB::table('eventos')       
        ->limit(6)
        ->orderBy('created_at','desc')
        ->get();
        
        return view('publico.evento_desarrollo',compact('evento','listanoticias'));

    }
}
