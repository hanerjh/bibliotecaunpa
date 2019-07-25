<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class eventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eventos=DB::table('eventos as e')
        ->join('tipoeventos as tpe','tpe.id','=','tpeventos_id')
        ->orderBy('e.id','desc')
        ->select('e.id','e.titulo','e.contenido','e.img','e.fecha_cierre','e.estado','e.created_at','tpe.tipo_evento')
        ->get();

        return view('admin.eventos.actualizar',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipo_eventos=DB::table('tipoeventos')->get();
        return view('admin.eventos.reg_eventos',compact("tipo_eventos"));
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

           //
           $validarDatos= $request->validate([
            'titulo'=>'required',
            'archivo'=>'required',
            'descripcion'=>'required',
            'fecha_cierre'=>'required',
            
        ]);

    
        //SI hay un archivo en el envio del formulario
        if($request->hasFile('archivo')){

        $file = $request->file('archivo');
        $name = time().$file->getClientOriginalName();         
        $destinationPath = public_path('/asset/img/eventos');                
         $file->move($destinationPath, $name);
            
      
    }
    // $id_session_user=$request->session()->get('iduser');
    $v=DB::table('eventos')->insert(
        ['titulo' => $request->titulo, 'contenido' => $request->descripcion, 'img' => $name, 'fecha_cierre' => $request->fecha_cierre, 'tpeventos_id'=>$request->tipo_evento, 'estado'=>1 ]
    );
    //'idpersonalider'=>$id_session_user
    return back()->with('msj','Evento Registrado');
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
        $tipo_eventos=DB::table('tipoeventos')->get();
        $eventos=DB::table('eventos as e')
        ->join('tipoeventos as tpe','tpe.id','=','tpeventos_id')
        ->where('e.id',$id)
        ->select('e.id','e.titulo','e.contenido','e.img','e.fecha_cierre','e.created_at','e.estado','tpe.tipo_evento','tpe.id as idtipoevento')
        ->get();
        
        return view('admin.eventos.formactualizaevenro',compact("eventos","tipo_eventos"));
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
       
      
        // SACTUALIZACION CON ENVIO DE IMAGEN
       if($request->hasFile('archivo')){

            $file = $request->file('archivo');
            $name = time().$file->getClientOriginalName();         
            $destinationPath = public_path('/asset/img/eventos');                
             $file->move($destinationPath, $name);  

             if($request->fecha_cierre=="" || $request->fecha_cierre==NULL )
             {
                DB::table('eventos')
                ->where('id', $id)
                ->update( ['titulo' => $request->titulo, 'contenido' => $request->descripcion, 'img' => $name, 'estado' => $request->estado,
                                     'tpeventos_id'=>$request->tipo_evento, 'updated_at'=>now() ]);
             }
             else{
                DB::table('eventos')
                ->where('id', $id)
                ->update( ['titulo' => $request->titulo, 'contenido' => $request->descripcion, 'img' => $name, 'fecha_cierre' => $request->fecha_cierre, 'estado' => $request->estado,
                                     'tpeventos_id'=>$request->tipo_evento, 'updated_at'=>now() ]);
             }
            
        }
        else{
            // ACTUALIZACION SIN ENVIAR IMAGEN
            if($request->fecha_cierre=="" || $request->fecha_cierre==NULL )
            {
                DB::table('eventos')
                ->where('id', $id)
                ->update( ['titulo' => $request->titulo, 'contenido' => $request->descripcion,'estado' => $request->estado,
                                     'tpeventos_id'=>$request->tipo_evento,'updated_at'=>now() ]);
            }
            else{
                DB::table('eventos')
            ->where('id', $id)
            ->update( ['titulo' => $request->titulo, 'contenido' => $request->descripcion, 'fecha_cierre' => $request->fecha_cierre,'estado' => $request->estado,
                                 'tpeventos_id'=>$request->tipo_evento,'updated_at'=>now() ]);
            }
            

        }
            return back()->with('msj','El evento fue actualizado correctamente');
          


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
