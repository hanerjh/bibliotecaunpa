<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class recursosElectronicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recursos=DB::table('recursos as r')
        ->join('tipo_recursos as tpr','tpr.id','=','tipo_recursos_id')
        ->orderBy('r.id','desc')
        ->select('r.id','r.nombre','r.descripcion','r.foto','r.enlace','r.estado','tpr.titulo')
        ->get();

        return view('admin.recursos.actualizarrecurso',compact('recursos'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipo_recursos=DB::table('tipo_recursos')->get();
        return view('admin.recursos.reg_recurso',compact('tipo_recursos'));
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
         $validarDatos= $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',            
            'enlace'=>'required'
            
        ]);

       
         //SI hay un archivo en el envio del formulario
        if($request->hasFile('archivo')){

          $file = $request->file('archivo');
          $name = time().$file->getClientOriginalName();
          $file->storeAs('public/asset/img/recursos', $name);

          $v=DB::table('recursos')->insert(
            ['nombre' => $request->nombre, 'descripcion' => $request->descripcion, 
            'foto' => $name, 'tipo_recursos_id'=>$request->tipo_recurso, 'enlace'=>$request->enlace, 'estado'=>1 ]);
      }
      else{
        $v=DB::table('recursos')->insert(
            ['nombre' => $request->nombre, 'descripcion' => $request->descripcion, 
             'tipo_recursos_id'=>$request->tipo_recurso, 'enlace'=>$request->enlace, 'estado'=>1 ]);

      }
    // $id_session_user=$request->session()->get('iduser');
     
      //'idpersonalider'=>$id_session_user
      return back()->with('msj','Recursos Registrado');
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
        $recurso=DB::table('recursos')
        ->where('id',$id)
        ->get();
        $tipo_recursos=DB::table('tipo_recursos')->get();
        return view('admin.recursos.formactualizarrecursos',compact("recurso","tipo_recursos"));
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
        if($request->hasFile('archivo')){

            $file = $request->file('archivo');
            $name = time().$file->getClientOriginalName(); 
            $file->storeAs('public/asset/img/recursos', $name);     
                DB::table('recursos')
                ->where('id', $id)
                ->update( ['nombre' => $request->nombre, 'descripcion' => $request->descripcion,'tipo_recursos_id'=>$request->tipo_recurso, 
                'enlace'=>$request->enlace, 'foto' => $name, 'estado' => $request->estado,'updated_at'=>now() ]);
            
            
        }
        else{
            // ACTUALIZACION SIN ENVIAR IMAGEN
            
            DB::table('recursos')
            ->where('id', $id)
            ->update( ['nombre' => $request->nombre, 'descripcion' => $request->descripcion,'tipo_recursos_id'=>$request->tipo_recurso,
            'enlace'=>$request->enlace, 'estado' => $request->estado,'updated_at'=>now() ]);
        
    
        }
            return back()->with('msj','El recurso fue actualizado correctamente');
          
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
        DB::table('recursos')->where('id',$id)->delete();
        return back()->with('msj','El recurso fue elimado');
    }
}
