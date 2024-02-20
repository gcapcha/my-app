<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\AreaController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('persona', [PersonaController::class, 'create']);
Route::get('personas', [PersonaController::class, 'read']);
Route::get('actualizar-persona', [PersonaController::class, 'update']);
Route::get('verdugo', [PersonaController::class, 'delete']);

Route::post('empresa', [EmpresaController::class, 'create']);
Route::get('empresa', [EmpresaController::class, 'read']);
Route::get('empresa/{id}', [EmpresaController::class, 'readOne']);
Route::put('empresa', [EmpresaController::class, 'update']);
Route::get('empresa-actualizar/{id}', [EmpresaController::class, 'updateOne']);
Route::delete('empresa/{id}', [EmpresaController::class, 'delete']);

Route::get('areas', [AreaController::class, 'read']);