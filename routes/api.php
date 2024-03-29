<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;

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

Route::post('/auth', [ApiController::class, 'auth'])->name('getToken');
Route::get('/departamentos', [ApiController::class, 'departamentos'])->name('getDepts');
Route::get('/ciudades/{idDept}', [ApiController::class, 'ciudades'])->name('getCities');