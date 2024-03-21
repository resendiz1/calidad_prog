<?php

use App\Http\Controllers\Controlador;
use Illuminate\Support\Facades\Route;



//Rutas temporales
Route::view('/', 'login');

//Route::view('/admin', 'admin.perfil'); //Ya se uso en las rutas verdaderas
Route::view('/admin/editar_usuario','admin.editar_usuario');





Route::view('/user/fmp', 'user.fmp_rellenar');

Route::view('/user/fmp_por_revisar', 'user.fmp_por_revisar')->name('por_revisar');
Route::view('/user/fpnc', 'user.fpnc_rellenar');
Route::view('/buscador_fmp', 'buscador_fmp');
Route::view('/encontrado', 'fmp_lleno');

Route::view('/user/fmp_enviado_revision', 'user.fmp_enviado_revision');
Route::view('/admin/eliminar', 'admin.eliminar_usuario');






//Rutas reales 

//ruta para agregar usuarios
Route::post('/admin', [Controlador::class, 'login_admin'])->name('login.admin');
Route::get('/admin', [Controlador::class, 'showAdmin' ])->name('admin.view');
Route::view('/admin/agregar_usuario','admin.agregar_usuario')->name('admin.add_usuario');
Route::post('/admin/agregar_usuario', [Controlador::class, 'agregar_usuario'])->name('agregar.usuario');
//rutas para gregar usuarios


//rutas para gestionar usuarios
Route::get('/admin/administrar_usuarios', [Controlador::class, 'lista_usuarios'])->name('lista.usuarios');
Route::post('/admin/administrar_usuarios', [Controlador::class, 'lista_buscados'])->name('lista.buscados');
Route::get('/admin/administrar_usuarios/{usuario}/editar', [Controlador::class, 'editar_usuarios'] )->name('editar.usuarios');
Route::patch('/admin/administrar_usuarios/{usuario}/editar',[Controlador::class, 'usuarios_update']  )->name('usuarios.update');
Route::get('/admin/administrar_usuarios/{usuario}/eliminar', [Controlador::class, 'eliminar_usuario'])->name('eliminar.usuario');
Route::delete('/admin/administrar_usuarios/{usuario}/eliminar/destroy',[Controlador::class, 'usuario_destruir'])->name('usuario.destruir');




//Rutas del usuario
Route::view('/user', 'user.perfil')->name('user.perfil');
Route::get('/user/fmp', [Controlador::class, 'fmp_rellenar'])->name('fmp.rellenar');
Route::post('/user/fmp/agregar/', [Controlador::class, 'fmp_agregar'])->name('fmp.agregar');
Route::get('/user/fmp/generados', [Controlador::class, 'fmp_generados'])->name('fmp.generados');
Route::get('/user/fmp/generados/{fmp}/llenos', [Controlador::class, 'fmp_lleno'])->name('fmp.lleno');

Route::get('/user/fmp_pendientes_revisar', [Controlador::class, 'pendientes_revisar'])->name('pendientes.revisar');

Route::get('/user/fmp_pendientes_revisar/{fmp}/fmp', [Controlador::class, 'fmp_revisar'])->name('fmp.revisar');

Route::patch('/user/fmp_pendientes_revisar/{fmp}/fmp/revisado', [Controlador::class, 'fmp_revisado'])->name('fmp.revisado');

Route::get('/admin/busqueda', [Controlador::class, 'busqueda_fmp'])->name('busqueda.fmp');
Route::post('/admin/busqueda', [Controlador::class, 'buscados_fmp'])->name('buscados.fmp');