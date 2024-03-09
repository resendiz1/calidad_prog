<?php

use Illuminate\Support\Facades\Route;



//Rutas temporales
Route::view('/', 'login');
Route::view('/admin', 'admin.perfil');
Route::view('/user', 'user.perfil');
Route::view('/admin/editar_usuario','admin.editar_usuario');
Route::view('/admin/agregar_usuario','admin.agregar_usuario');
Route::view('/user/fmp', 'user.fmp_rellenar');
Route::view('/admin/administrar_usuarios', 'admin.administrar_usuarios');
Route::view('/user/fmp_por_revisar', 'user.fmp_por_revisar');
Route::view('/user/fpnc', 'user.fpnc_rellenar');
Route::view('/buscador_fmp', 'buscador_fmp');
Route::view('/encontrado', 'fmp_encontrado');
Route::view('/user/fmp_pendientes_revisar', 'user.tabla_fmp_por_revisar');
Route::view('/user/fmp_enviados_revision', 'user.tabla_fmp_enviados_revision');
Route::view('/user/fmp_enviado_revision', 'user.fmp_enviado_revision');