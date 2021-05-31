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

// Route::apiResource('dogs','DogController' );
Route::get('dogs',[App\Http\Controllers\DogController::class,'index']);
Route::get('dogs/{id}',[App\Http\Controllers\DogController::class,'show']);
Route::post('dogs',[App\Http\Controllers\DogController::class,'store']);
Route::put('dogs/{id}',[App\Http\Controllers\DogController::class,'update']);
Route::delete('dogs/{id}',[App\Http\Controllers\DogController::class,'destroy']);
// Route::resource('dogs',DogController::class);

// App\Http\Controllers\ProtocoloVirtualController::class