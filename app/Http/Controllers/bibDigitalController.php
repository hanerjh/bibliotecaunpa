<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type_resource;
use App\resource;

class bibDigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recursos=resource::paginate(2);
        $tiporecursos = type_resource::all();
        
            $bandera=0;
      
        
       // dd(  $tiporecurso);
        return view('publico.bibdigital.index', compact('tiporecursos','recursos','bandera'));
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
        
        $idrecurso= $request->input('recurso_option_list');
         $recursos2 = resource::where('tipo_recursos_id',$idrecurso)->paginate(2);
         $tiporecursos = type_resource::all();
         $bandera=1;
        return view('publico.bibdigital.index',compact('recursos2','bandera','tiporecursos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "hola";
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
