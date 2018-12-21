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
    public function index(Request $request)
    {
 
       //dd($request->query('bandera'));
       //dd($request->getQueryString());
       //dd($request->query('idtiporecurso'));
       //SE EVALUA QUE EL REQUES SEA DESDE LA ENTRADA AUTOMATICA DEL INDEX CONTROLLER
        if($request->getQueryString()==null){
            $bandera=3;
            $recursos=resource::paginate(2);
            $tiporecursos = type_resource::all();
        }
        else //ENTRA A ESTE ELSE CUANCO SE HACE CLICK EN LOS ENLACES DE PAGINACION
        { 
            $bandera=$request->query('data-bandera-type');
            // CUANDO BANDERA EN DIFERENTE DE 3, ES PORQUE SE ESTA BUSCANDO DESDE EL FILTRO TIPO DE RECURSOS E INGRESA AL IF
             if($bandera!=3){
                $idrecurso= $request->query('idtiporecurso'); 
                    
                $recursos = resource::where('tipo_recursos_id',$idrecurso)->paginate(2);               
               

             }
            else  //SI LA BANDERA ES IGUAL A 3 ES PORQUE SE ESTA HACIENDO CLICK EN LOS LINKS DE PAGINACION QUE FUERON CARGADOS EN LA PRIMERA LLAMADA DEL INDEX CONTROLLER
            {
                $recursos=resource::paginate(2);
              
            }
           
            $tiporecursos = type_resource::all();
           
        }
        
        
       // dd(  $tiporecurso);
        return view('publico.bibdigital.index', compact('tiporecursos','bandera','recursos'));
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
         $recursos = resource::where('tipo_recursos_id',$idrecurso)->paginate(2);
         $tiporecursos = type_resource::all();
         $bandera=1;
        return view('publico.bibdigital.index',compact('recursos','bandera','tiporecursos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
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
