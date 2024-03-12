<?php

use App\Http\Controllers\Controlador;
use Illuminate\Support\Facades\Route;



//Rutas temporales
Route::view('/', 'login');

//Route::view('/admin', 'admin.perfil'); //Ya se uso en las rutas verdaderas
Route::view('/admin/editar_usuario','admin.editar_usuario');




Route::view('/user', 'user.perfil');
Route::view('/user/fmp', 'user.fmp_rellenar');

Route::view('/user/fmp_por_revisar', 'user.fmp_por_revisar');
Route::view('/user/fpnc', 'user.fpnc_rellenar');
Route::view('/buscador_fmp', 'buscador_fmp');
Route::view('/encontrado', 'fmp_encontrado');
Route::view('/user/fmp_pendientes_revisar', 'user.tabla_fmp_por_revisar');
Route::view('/user/fmp_enviados_revision', 'user.tabla_fmp_enviados_revision');
Route::view('/user/fmp_enviado_revision', 'user.fmp_enviado_revision');


//Rutas reales 

//ruta para agregar usuarios
Route::post('/admin', [Controlador::class, 'login_admin'])->name('login.admin');
Route::get('/admin', [Controlador::class, 'showAdmin' ])->name('admin.view');
Route::view('/admin/agregar_usuario','admin.agregar_usuario')->name('admin.add_usuario');
Route::post('/admin/agregar_usuario', [Controlador::class, 'agregar_usuario'])->name('agregar.usuario');
//rutas para gregar usuarios


//rutas para gestionar usuarios
Route::get('/admin/administrar_usuarios', [Controlador::class, 'lista_usuarios'])->name('lista.usuarios');

