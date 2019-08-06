<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class documentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $documentos=DB::table('documentos as d')
        ->join('tipo_documentos as tpd','tpd.id','=','fktipodocumento')
        ->orderBy('d.id','desc')
        ->select('d.id','d.titulo','d.descripcion','d.estado','d.created_at','tpd.tdocumento')
        ->get();

        return view('admin.documentos.actualizar',compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipo_documentos=DB::table('tipo_documentos')->get();
        return view('admin.documentos.reg_documento',compact("tipo_documentos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $tpdoc=$request->tipo_documento;
           $campo="archivo";
           if( $tpdoc==6){
             $campo="enlace";
           }
         
        
           $validarDatos= $request->validate([
            'titulo'=>'required',            
             $campo =>'required',
            'descripcion'=>'required',
        ]);

    
        //SI la variable $campo es igual a archivo, entonce se envio un archivo en formulario
       if($request->hasFile('archivo'))
       {

        $file = $request->file('archivo');
        $name = time().$file->getClientOriginalName();         
        $file->storeAs('public/asset/documentos', $name);

        DB::table('documentos')->insert(
            ['titulo' => $request->titulo, 'descripcion' => $request->descripcion, 'archivo' => $name, 'fktipodocumento'=>$request->tipo_documento, 'estado'=>1 ]);
      }
      else //SI LA VARIABLE $CAMPO ES IGUAL A ENLACE, ENTONCES; SE ENVIO UN ENLACE EN EL FORMULARIO QUE CORRRESPONDE A UN VIDEO
      {

        DB::table('documentos')->insert(
            ['titulo' => $request->titulo, 'descripcion' => $request->descripcion, 'archivo' => $request->enlace, 'fktipodocumento'=>$request->tipo_documento, 'estado'=>1 ]);
      }

    // $id_session_user=$request->session()->get('iduser');

    return back()->with('msj','Documento Registrado');
    
     
     
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
        $tipo_documentos=DB::table('tipo_documentos')->get();
        $documento=DB::table('documentos as d')
        ->join('tipo_documentos as tpd','tpd.id','=','fktipodocumento')
        ->where('d.id',$id)     
        ->select('d.id','d.titulo','d.descripcion','d.estado','d.fktipodocumento','d.created_at','tpd.tdocumento')
        ->get();
        
        return view('admin.documentos.formactualizadocumento',compact("tipo_documentos","documento"));
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
       
      
        // SACTUALIZACION CON ENVIO DE ARCHIVO
       if($request->hasFile('archivo')){

            $file = $request->file('archivo');
            $name = time().$file->getClientOriginalName();         
            $file->storeAs('public/asset/documentos', $name);   

                DB::table('documentos')
                ->where('id', $id)
                ->update( ['titulo' => $request->titulo, 'descripcion' => $request->descripcion, 'archivo' => $name, 'estado' => $request->estado,
                                     'fktipodocumento'=>$request->tipo_evento, 'updated_at'=>now() ]);
        }
        else{
            // ACTUALIZACION SIN ENVIAR ARCHIVO
            DB::table('documentos')
            ->where('id', $id)
            ->update( ['titulo' => $request->titulo, 'descripcion' => $request->descripcion, 'estado' => $request->estado,
                                 'fktipodocumento'=>$request->tipo_evento, 'updated_at'=>now() ]);

        }
            return back()->with('msj','El documento fue actualizado correctamente');
          


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
