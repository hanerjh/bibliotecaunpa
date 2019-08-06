<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $publicaciones=DB::table('publicaciones as p')
        ->join('tipo_publicaciones as tpp','tpp.id','=','p.fk_idtipopublicacion')
        ->orderBy('p.created_at','desc')
        ->select('p.id','p.titulo','p.descripcion','p.img','p.estado','p.created_at','tpp.tipopublicacion')
        ->where('p.fk_idtipopublicacion','<>',1)
        ->get();
        return view('admin.publicaciones.actualizarpublicaciones',compact('publicaciones'));
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

                    //SI TIPO DE PUBLICACION ES ANUNCIOS
                    if($request->tipo_publicacion==2){
                     
                        $destinationPath=$file->storeAs('public/asset/img/noticias', $name);

                    }else{
                     
                        $destinationPath=$file->storeAs('public/asset/img/banner', $name);
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
        $publicacion=DB::table('publicaciones')        
        ->where('id',$id)
        ->get();
        $tipo_publicaciones=DB::table('tipo_publicaciones')->where('id',"<>",1)->get();
        return view('admin.publicaciones.formactualizacionpublicacion',compact("publicacion","tipo_publicaciones"));

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
        $validarDatos= $request->validate([
            'titulo'=>'required',           
            'descripcion'=>'required',
        ]);

                    // SACTUALIZACION CON ENVIO DE IMAGEN
                if($request->hasFile('archivo')){

                    $file = $request->file('archivo');
                    $name = time().$file->getClientOriginalName(); 

                    //SI LA OPCION ES ANUNCIOS ENTONCES LA IMAGEN SE ENVIA A LA CARPETA NOTICIA 
                    if($request->tipo_publicacion==2){

                        $destinationPath=$file->storeAs('public/asset/img/noticias', $name);
                    }
                    else {
                        $destinationPath=$file->storeAs('public/asset/img/banner', $name);
                    } 


                        DB::table('publicaciones')
                        ->where('id', $id)
                        ->update( ['titulo' => $request->titulo, 'descripcion' => $request->descripcion, 'img' => $name, 'estado' => $request->estado,'updated_at'=>now() ]);
                    
                    
                }
                else{
                    // ACTUALIZACION SIN ENVIAR IMAGEN
                    
                    DB::table('publicaciones')
                    ->where('id', $id)
                    ->update( ['titulo' => $request->titulo, 'descripcion' => $request->descripcion,'estado' => $request->estado,'updated_at'=>now() ]);
                

                }
                    return back()->with('msj','La publicación fue actualizada correctamente');
                
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
