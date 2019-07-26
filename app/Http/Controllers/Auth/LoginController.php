<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm(){

        return view('admin.login');
    }

    public function login(){

       /* $hashed_random_password = Hash::make('hanower89');
        DB::table('users')->insert(
            ['name' => 'haner', 'email' =>'haner@unipacifico.edu.co', 
             'password' => $hashed_random_password
            ]);*/


       $validarDatos= $this->validate(request(),[
            'email'=>'email| required',
            'password'=>'required',            
            
        ]);

      if(Auth::attempt($validarDatos)){

            return redirect()->route('admin');
        }

        return back()->withErrors(['email'=>trans('auth.failed')])
                ->withInput(request(['email']));
    }

    public function logout(){
        Auth::logout();
        $mensaje="su seccion se ha ";
        return redirect('/formlogin')->with('mensaje','Su session se ha cerrado correctamente');
    }

    public function username()
    {
        return 'name';
    }
}
