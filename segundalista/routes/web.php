<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ExerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1', [ExerciciosController::class, 'abrirFormExer1']);
Route::post('/listaex1', [ExerciciosController::class, 'respostaExer1']);

Route::get('/ex2', [ExerciciosController::class, 'abrirFormExer2']);
Route::post('/listaex2', [ExerciciosController::class, 'respostaExer2']);

Route::get('/ex3', [ExerciciosController::class, 'abrirFormExer3']);
Route::post('/listaex3', [ExerciciosController::class, 'respostaExer3']);

