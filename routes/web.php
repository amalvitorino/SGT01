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
Route::get('/cadeiras/registar',[CadeiraController::class,'create']);
Route::post('/cadeiras/registar',[CadeiraController::class,'store']);

//usuario
Route::get('/user/{user}',[UserController::class,'show']);