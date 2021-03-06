<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("Innovasport",'Innovasport@Productos');
Route::get("Innovasport/Consulta1/{id?}",'Innovasport@Productoid');
Route::get("Innovasport/Consulta2",'ProductoComentario@ProductosCommit');
Route::get("Innovasport/Consulta3",'Usercommit@Usercommit');
Route::post("Innovasport/GuardarProducto",'Innovasport@GuardarProducto');
Route::post("/Guardarcomentarios",'Guardarcomentarios@Guardar');
Route::put("Innovasport/Actualizarproducto/{id}",'Actualizar@Actualizarproduct');
Route::put("Innovasport/Actualizarcommit/{id}", 'Actualizar@Actualizarcommit');
Route::delete("Innovasport/Eliminarproducto/{id}",'Actualizar@Eliminar');
Route::delete("Innovasport/Eliminarcommit/{id}",'Actualizar@Eliminarcommit');

