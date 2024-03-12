<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class Controlador extends Controller
{

    protected $guard = 'adminis'; 

    public function login_admin(Request $request){


       //cachando los datos del formulario
        $credenciales = request()->only('correo', 'password');
       

        //comparandolos y viendo si son correctos
        if(Auth::guard('adminis')->attempt($credenciales)){
            return redirect()->route('admin.view');
        }

        else{
            return back()->withErrors(['email' => 'credenciales invalidas' ]);
        }


    }



    public function showAdmin(){
        return view('admin.perfil');
    }



     
    public function agregar_usuario(){ //Agregarndo usuarios desde el perfil del administrador   

        request()->validate([
            'nombre' => 'required|string|max:100',
            'email'  => 'required|email|unique:users',
            'password' => 'required|string|min:6'
        ]);    

    
        


        $user = new User();
        $user->nombre_completo = request('nombre');
        $user->email = request('email');
        $user->password = request('password');
        $user->area = request('area');
        $user->planta = request('planta');
        $user->save();

        return back()->with('success', 'El usuario:  '. request('nombre').' se registro correctamente');


    }


    public function lista_usuarios(){
        
        $users = User::all();
        return view('admin.administrar_usuarios', compact('users'));

    }






}
