<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Fmp;
use App\Models\Fpnc;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Request;

class Controlador extends Controller
{
    protected $guard = 'adminis'; 


    public function __construct(){
        $this->middleware('auth')->only('fmp_agregar');
    }




    public function login(Request $request){

        //Se cierran las sesiones abiertas antes de iniciar una nueva sesion
        Session::flush(); 
        Auth::logout();
        //Se cierran las sesiones abiertas antes de iniciar una nueva sesion


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
        $area = Auth::user()->area;
        $id_logeado = Auth::user()->id;
        $usuarios_planta = DB::select("SELECT nombre_completo FROM USERS WHERE planta LIKE $planta AND area LIKE '$area' ");
        //Obteniendo todos los usuario


        return view('user.fmp_rellenar', compact('fecha', 'usuarios_planta'));


    }

    public function fmp_agregar(){

        //
        $planta = Auth::user()->planta;

        if($planta == 1){
            $mas_alto = DB::select("SELECT MAX(folio_p1) as id  FROM fmp");
            $folio = "PL1-0".$mas_alto[0]->id + 1;
            $folio_planta = 'folio_p1';
            $consecutivo = $mas_alto[0]->id + 1;

        }



        if($planta == 2){
            $mas_alto = DB::select("SELECT MAX(folio_p2) as id  FROM fmp");
            $folio = "PL2-0".$mas_alto[0]->id + 1;
            $folio_planta = 'folio_p2';
            $consecutivo = $mas_alto[0]->id +1;

        }




        if($planta == 3){
            $mas_alto = DB::select("SELECT MAX(folio_p3) as id  FROM fmp");
            $folio = "PL3-0".$mas_alto[0]->id + 1;
            
            $folio_planta = 'folio_p3'; //igualo la variable al nombre de la columna que se va a utilizar

            $consecutivo = $mas_alto[0]->id + 1; //obtengo el folio mas alto y le sumo uno ara tener el folio que voy a asignar

        }
        

        //validando los datos obligatorios
        request()->validate([
            'hora_recepcion' => 'required',
            'lote' => 'required',
            'operador' => 'required',
            'placas_transporte' => 'required',
            'placas_caja' => 'required',
            'hora_entrada_laboratorio' => 'required',
            'hora_liberacion' => 'required',
            'superviso_muestreo' => 'required'
        ]);
        


        $fmp = new Fmp();
        $fmp->$folio_planta = $consecutivo;
        $fmp->planta = request('planta');
        $fmp->folio = $folio;
        $fmp->fecha = request('fecha');
        $fmp->hora_recepcion = request('hora_recepcion');
        $fmp->producto = request('producto');
        $fmp->proveedor = request('proveedor');
        $fmp->lote = request('lote');
        $fmp->linea_transportista = request('linea_transportista');
        $fmp->nombre_operador = request('operador');
        $fmp->placas_transporte = request('placas_transporte');
        $fmp->placas_caja = request('placas_caja');
        $fmp->hora_entrada_lab = request('hora_entrada_laboratorio');
        $fmp->hora_liberacion = request('hora_liberacion');
        $fmp->humedad = request('humedad');
        $fmp->temperatura = request('temperatura');
        $fmp->peso_especifico = request('peso_especifico');
        $fmp->grano_maltratado = request('grano_maltratado');
        $fmp->grano_quebrado = request('grano_quebrado');
        $fmp->impurezas = request('impurezas');
        $fmp->cantidad_muestra = request('cantidad_muestra');
        $fmp->bx = request('bx');
        $fmp->plagas = request('plagas');
        $fmp->certificado_calidad = request('certificado_calidad');
        $fmp->fluorecencia = request('fluorecencia');
        $fmp->asegurado = request("asegurado");
        $fmp->color_olor_caracteristico = request('color_olor');
        $fmp->equipo_muestreo = request('equipo_muestreo');
        $fmp->materia_impropio = request('materia_impropio');
        $fmp->metodo_muestreo = request('metodo_muestreo');
        $fmp->dwg = request('dwg');
        $fmp->m10 = request('m10');
        $fmp->m16 = request('m16');
        $fmp->m18 = request('m18');
        $fmp->f = request('f');
        $fmp->superviso_muestreo = request('superviso_muestreo');
        $fmp->aceptado_concesion = request('aceptado_concesion');
        $fmp->usuario_logeado = request('usuario_logeado');
        $fmp->dictamen_final = request('dictamen');
        $fmp->observaciones_realizador = request('observaciones');
        
        $fmp->save();


        //Si el dictamen fue rechazado se manda al usuario a rellenar el forato de Producto No Conforme (fpnc)
        //con el folio para ligarlo al Formato de Materia Prima (fmp)
        if(request('dictamen') == 'rechazado' ){
            return view('user.fpnc_rellenar', compact('folio'));

        }





        // return view('user.tabla_fmp_enviados_revision', compact('formatos'))->with('creado', "El documento con folio: $folio fue creado correctamente");



        //Si todo marcha genial me va a redirigir a esta vista con el mensaje de sesion que se muestra
        return redirect()->route('user.perfil')->with('creado', "El documento con folio: $folio   fue creado correctamente");


    }


    public function fmp_generados(){

        $planta = Auth::user()->planta;
        //Me selecciona todos los formatos generados por es planta 
        $formatos = DB::select("SELECT*FROM fmp WHERE planta LIKE $planta ORDER BY created_at DESC");

        return view('user.tabla_fmp_enviados_revision', compact('formatos'));
    }


    public function fmp_lleno(Fmp $fmp){

        return view('fmp_lleno', compact('fmp'));

    }


    public function pendientes_revisar(){

        $area = Auth::user()->area;
        $planta = Auth::user()->planta;

        if($area == 'PRODUCCION'){
            $reviso = 'reviso_produccion';
        }
        if($area == 'BASCULA'){
            $reviso = 'reviso_bascula';
        }

        if($area == 'CALIDAD'){
            Session::flush(); //Manda alv la session
            Auth::logout();
            return redirect()->route('login');
            
        }






        $pendientes = DB::select("SELECT*FROM fmp WHERE planta=$planta ORDER BY  created_at DESC ");

   
        return view('user.tabla_fmp_por_revisar', compact('pendientes', 'reviso'));
    }





    public function  fmp_revisar(Fmp $fmp){

        $area = Auth::user()->area;

        if($area == 'PRODUCCION'){
            $reviso = 'reviso_produccion';
            $observaciones = 'observaciones_produccion';
        }

        if($area == 'BASCULA'){
            $reviso = 'reviso_bascula';
            $observaciones = 'observaciones_bascula';
        }

        if($area == 'CALIDAD'){
            Session::flush(); //Manda alv la session
            Auth::logout();
            return redirect()->route('login');
    
        }

 

        return view('user.fmp_por_revisar', compact('fmp', 'reviso', 'observaciones'));

    }






    public function fmp_revisado(Fmp $fmp){

    //   return  request('observaciones_area');


        $fmp->update([
            request('reviso') => request('usuario'),
            request('observaciones_area') => request('observaciones'),
        ]);

        return redirect()->route('pendientes.revisar')->with('revisado', 'El documento se guardo con exito');
    }


    public function busqueda_fmp(){

        $formatos = Fmp::all();

        return view('admin.buscador_fmp', compact('formatos'));
    }

    public function buscados_fmp(){

        $query = request('busqueda');
        $formatos = DB::select("SELECT*FROM fmp WHERE proveedor LIKE '%$query%'  OR producto LIKE '%$query%' OR fecha LIKE '%$query%' ");
        return view('admin.buscador_fmp', compact('formatos'));

    }

    public function cerrar_sesion(){

        Session::flush(); //Manda alv la session
        Auth::logout();
        return redirect()->route('login');

    }



    public function tabla_fpnc(){
        $fmp = DB::select("SELECT*FROM fmp WHERE dictamen_final LIKE 'RECHAZADO' AND fpnc_lleno LIKE '' ");

        return view('user.tabla_fpnc_pendientes', compact('fmp'));
    }



    public function fpnc_rellenar(Fmp $fmp){
        
        //Obteniendo la fecha
        Carbon::setLocale(config('app.locale'));
        $fecha = Carbon::now()->isoFormat('LL');
        //Obteniendo la fecha

        return view('user.fpnc_rellenar', compact('fmp', 'fecha'));
    }

    public function fpnc_agregar(){



        request()->validate([
            'presentacion' => 'required',
            'cantidad' => 'required',
            'desviacion' => 'required',
            'observaciones' => 'required',
            'recibe_notificacion' => 'required',
            'emite_notificacion' => 'required'

        ]);




        $foto1 = '';
        $foto2 = '';
        $foto3 = '';
        $otra_notificacion = '';


        if(request('imagen1')){
            $foto1 = request('imagen1')->store();
        }
        if(request('imagen2')){
            $foto2 = request('imagen2')->store();
        }
        if(request('imagen3')){
            $foto3 = request('imagen3')->store();
        }

        if(request('notificacion') == 'otra' ){
            $otra_notificacoin = request('otra_notificacion');
        }




        $fpnc = new Fpnc();
        $fpnc->fecha = request('fecha');
        $fpnc->folio = request('folio_fmp');
        $fpnc->folio_fmp = request('folio_fmp');
        $fpnc->materia = request('material');
        $fpnc->proveedor = request('proveedor');
        $fpnc->producto = request('producto');
        $fpnc->presentacion = request('presentacion');
        $fpnc->lote = request('lote');
        $fpnc->cantidad = request('cantidad');
        $fpnc->desviacion = request('desviacion');
        $fpnc->foto1 = $foto1;
        $fpnc->foto2 = $foto2;
        $fpnc->foto3 = $foto3;
        $fpnc->observaciones = request('observaciones');
        $fpnc->via_notificacion = request('notificacion');
        $fpnc->otra_notificacion = $otra_notificacion;
        $fpnc->recibe_notificacion = request('recibe_notificacion');
        $fpnc->emite_notificacion = request('emite_notificacion');
        $fpnc->usuario_logeado = request('usuario_logeado');
 
        $fpnc->save();
        
        $fmp = Fmp::findOrFail(request('id_fmp'));
        $fmp->fpnc_lleno = 'llenado';
        $fmp->save();



    
        return back();

    }





    public function fpnc_generados(){

        $fpnc = DB::select("SELECT*FROM fpnc ORDER BY created_at DESC");
        return view('user.tabla_fpnc_llenos', compact('fpnc'));

    }





    public function fpnc_lleno(Fpnc $fpnc){
        
        return view('user.fpnc_lleno', compact('fpnc')); 
    }






    public function fvu_rellenar(){

        return view('user.fvu_rellenar');
    }

    public function fvu_agregar(){
        
    }



}
