<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EdicionController;
use App\Http\Controllers\API\EditorialController;
use App\Http\Controllers\API\EventoController;
use App\Http\Controllers\API\GeneroController;
use App\Http\Controllers\API\TipoProductoController;
use App\Http\Controllers\API\NoticiaController;
use App\Http\Controllers\API\ProductoController;

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

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('/edicion', EdicionController::class)->middleware('auth:api');

Route::apiResource('/editorial', EditorialController::class)->middleware('auth:api');

Route::apiResource('/evento', EventoController::class)->middleware('auth:api');

Route::apiResource('/genero', GeneroController::class)->middleware('auth:api');

Route::apiResource('/tipoproducto', TipoProductoController::class)->middleware('auth:api');

Route::apiResource('/noticia', NoticiaController::class)->middleware('auth:api');

Route::apiResource('/producto', ProductoController::class)->middleware('auth:api');