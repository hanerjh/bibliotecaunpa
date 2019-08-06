<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
         $eventos=DB::table('eventos as e')
                        ->join('tipoeventos as tpe','tpe.id','=','tpeventos_id')
                        ->limit(2)
                        ->orderBy('e.id','desc')
                        ->select('e.id','e.titulo','e.contenido','e.img','e.fecha_cierre','e.created_at','tpe.tipo_evento')
                        ->where('e.estado',1)
                        ->get();
                      
         $publicaciones=DB::table('publicaciones as p')
         ->join('tipo_publicaciones as tp','tp.id','=','p.fk_idtipopublicacion')
         ->where('fk_idtipopublicacion',1)
         ->orwhere('fk_idtipopublicacion',2)
         ->select('p.id','p.titulo','p.descripcion','p.img','tp.tipopublicacion','p.created_at')
         ->limit(6)->orderBy('p.id', 'desc')
         ->get();
         $banners=DB::table('publicaciones')->where('fk_idtipopublicacion',"=",3)->limit(3)->orderBy('id', 'desc')->get();
       // TRAE LOS LIBROS DESDE KOHA
         $client = new \GuzzleHttp\Client();
         try{

            $request = $client->get('http://unipacifico.metabiblioteca.org/cgi-bin/koha/svc/report?id=51');
         $response = $request->getBody();
          $covers= json_decode($response->getContents());
        //TRAE INFORMACION SOBRE TIULOS Y EJEMPLARES
        
          $request = $client->get('http://unipacifico.metabiblioteca.org/cgi-bin/koha/svc/report?id=52');
          $response = $request->getBody();
          $datos= json_decode($response->getContents());
        //REVISTAS
          $request = $client->get('http://unipacifico.metabiblioteca.org/cgi-bin/koha/svc/report?id=57');
          $response = $request->getBody();
          $revistas= json_decode($response->getContents());
           //dd($datos);
        return view('publico.home',compact('eventos','publicaciones','banners','covers','datos','revistas'));

         } catch (\GuzzleHttp\Exception\ConnectException $e) {
            //Log::error($e);
           //exit();
            //return redirect('/');
            return view('publico.home',compact('eventos','publicaciones','banners'));
        }
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
