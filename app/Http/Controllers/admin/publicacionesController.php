<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class publicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //      
        $publicaciones=DB::table('publicaciones')->get();
        return view('admin.publicaciones.actualizar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipo_publicaciones=DB::table('tipo_publicaciones')->where('id',"<>",1)->get();
        return view('admin.publicaciones.reg_publicacion',compact("tipo_publicaciones"));
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
                    'titulo'=>'required',
                    'archivo'=>'required',
                    'fecha_cierre'=>'required',
                    
                ]);

            
                //SI hay un archivo en el envio del formulario
                if($request->hasFile('archivo')){

                $file = $request->file('archivo');
                $name = time().$file->getClientOriginalName();

                    if($request->tipo_publicacion==2){
                        $destinationPath = public_path('/asset/img/noticias');                
                        $file->move($destinationPath, $name);
                    }else{
                        $destinationPath = public_path('/asset/img/banner');                
                        $file->move($destinationPath, $name);
                    }
              
            }
            // $id_session_user=$request->session()->get('iduser');
            $v=DB::table('publicaciones')->insert(
                ['titulo' => $request->titulo, 'descripcion' => $request->descripcion, 'img' => $name, 'fk_idtipopublicacion'=>$request->tipo_publicacion, 'estado'=>1 ]
            );
            //'idpersonalider'=>$id_session_user
            return back()->with('msj','Información Registrada');

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
