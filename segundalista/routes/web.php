<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ExerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1', [ExerciciosController::class, 'abrirFormExer1']);
Route::post('/listaex1', [ExerciciosController::class, 'respostaExer1']);