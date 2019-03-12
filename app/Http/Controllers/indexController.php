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
         $eventos=DB::table('eventos')
                        ->join('tipoeventos','tipoeventos.id','=','tpeventos_id')
                        ->limit(3)
                        ->orderBy('eventos.id','desc')
                        ->get();
         $publicaciones=DB::table('publicaciones')->where('fk_idtipopublicacion',"<>",3)->limit(6)->orderBy('id', 'desc')->get();
         $banners=DB::table('publicaciones')->where('fk_idtipopublicacion',"=",3)->limit(3)->orderBy('id', 'desc')->get();
       
         $client = new \GuzzleHttp\Client();
         $request = $client->get('http://unipacifico.metabiblioteca.org/cgi-bin/koha/svc/report?id=51');
         $response = $request->getBody();
          $covers= json_decode($response->getContents());
           
         return view('publico.home',compact('eventos','publicaciones','banners','covers'));
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
