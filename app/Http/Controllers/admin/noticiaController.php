<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class noticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.noticia.reg_noticia');
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
            'descripcion'=>'required',
            'archivo'=>'required',
            
        ]);

       
         //SI hay un archivo en el envio del formulario
        if($request->hasFile('archivo')){

          $file = $request->file('archivo');
          $name = time().$file->getClientOriginalName();
          $destinationPath = public_path('/asset/img/noticias');
          $file->move($destinationPath, $name);
      }
    // $id_session_user=$request->session()->get('iduser');
      $v=DB::table('publicaciones')->insert(
          ['titulo' => $request->titulo, 'descripcion' => $request->descripcion, 'img' => $name, 'fk_idtipopublicacion'=>1, 'estado'=>1 ]
      );
      //'idpersonalider'=>$id_session_user
      return back()->with('msj','Noticia Registrada');
      
    
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


    public function Listaactualizacion()
    {
        //LISTAMOS TODAS LA NOTICIAS 
        $noticias=DB::table('publicaciones')->where('fk_idtipopublicacion',1)->orderBy('created_at', 'desc')->paginate(6);
        return view('admin.noticia.actualizarnoticia',compact('noticias'));

    }

}
