<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use Carbon\Carbon;

class Controlador extends Controller
{

    protected $guard = 'adminis'; 

    public function login_admin(Request $request){

        $credenciales = request()->only('email', 'password');


        if(request('admin')){
       
            if(Auth::guard('adminis')->attempt($credenciales)){
                return redirect()->route('admin.view');
            }


            else{
                return back()->withErrors(['email' => 'El email no esta registrado como admnistrador' ]);
            }

        }


            if(Auth::attempt($credenciales)){
                return redirect()->route('user.perfil');
            }
            else{
                return back()->withErrors(['email' => 'El email no esta registrado como usuario ' ]);
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
        
        $resultados = User::all();
    

        return view('admin.administrar_usuarios', compact('resultados'));

    }

    public function lista_buscados(){
    
        $query = request('query');
        $resultados = DB::select("SELECT * FROM users WHERE nombre_completo LIKE '%$query%' OR  email LIKE '%$query%' OR area LIKE '%$query%'"  );
        return view('admin.administrar_usuarios', compact('resultados'));
   
    }

    public function editar_usuarios(User $usuario){
        return view('admin.editar_usuario', ['usuario' => $usuario] );
    }


    public function usuarios_update(User $usuario){
        
        //Obtenemos las contraseñas para ver si la cambio el usuario
        $id = request('id');
        $password = DB::select("SELECT password FROM Users WHERE id = $id");


        if(request('password') == $password[0]->password ){
         
            $usuario->update([
                'nombre_completo' => request('nombre'),
                'email' => request('email'),
                'area' =>request('area'),
                'planta' => request('planta')

            ]);

            return redirect()->route('lista.usuarios')->with("actualizado", "El usuario fue actualizado");
            
        }
        else{
            
            $usuario->update([
                'nombre_completo' => request('nombre'),
                'email' => request('email'),
                'password' => request('password'),
                'area' =>request('area'),
                'planta' => request('planta')

            ]);

            return redirect()->route('lista.usuarios')->with("actualizado", "El usuario fue actualizado");


        }



    }

    public function eliminar_usuario(User $usuario){

        return view('admin.eliminar_usuario', ['usuario' => $usuario] );
        
    }

    public function usuario_destruir(User $usuario){
    
        $usuario->delete();
        return redirect()->route('lista.usuarios')->with("eliminado", "El usuario $usuario->nombre_completo fue eliminado");
    
    }



    public function fmp_rellenar(){

        //Obteniendo la fecha
        Carbon::setLocale(config('app.locale'));
        $fecha = Carbon::now()->isoFormat('LL');
        //Obteniendo la fecha

        //Obteniendo todos los usuario
        $planta = Auth::user()->planta;
        $id_logeado = Auth::user()->id;
        $usuarios_planta = DB::select("SELECT nombre_completo FROM USERS WHERE planta LIKE $planta AND  id != $id_logeado");
        //Obteniendo todos los usuario


        return view('user.fmp_rellenar', compact('fecha', 'usuarios_planta'));


    }

    public function fmp_agregar(){
        //hay que generar el folio tomando los 
        $mas_alto = DB::select("SELECT MAX(id) as id  FROM users");
        $folio = $mas_alto[0]->id + 1;




        return $folio;
    }



    



}
