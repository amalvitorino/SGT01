<?php

use App\Http\Controllers\CadeiraController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TrabalhoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//princimpal
Route::get('/',[Controller::class,'index']);

//trabalho
Route::get('/trabalhos',[TrabalhoController::class,'ver']);
Route::get('/trabalhos/registar',[TrabalhoController::class,'create']);
Route::post('/trabalhos/registar',[TrabalhoController::class,'store']);
Route::get('/trabalhos/editar/{trabalho}',[TrabalhoController::class,'edit']);
Route::post('/trabalhos/editar/{trabalho}',[TrabalhoController::class,'actualizar']);
Route::get('/trabalhos/eliminar/{trabalho}',[TrabalhoController::class,'eliminar']);
Route::get('/trabalhos/pesquisar',[TrabalhoController::class,'pesquisar']);

//Cadeira
Route::get('/cadeiras',[CadeiraController::class,'index']);
Route::post('/cadeiras',[CadeiraController::class,'store']);
Route::get('/cadeiras/eliminar/{cadeira}',[CadeiraController::class,'destroy']);
Route::get('/cadeiras/editar/{cadeira}',[CadeiraController::class,'edit']);
Route::post('/cadeiras/editar',[CadeiraController::class,'update']);

//usuario
Route::get('/user/{user}',[UserController::class,'show']);
