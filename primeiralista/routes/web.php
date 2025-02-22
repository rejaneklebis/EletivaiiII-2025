<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1', function(){
    return view('lista.ex1');
});

Route::post('/listaex1', function(Request $request){
    $nota1 = floatval($request->input('nota1'));
    $nota2 = floatval($request->input('nota2'));
    $nota3 = floatval($request->input('nota3'));
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return view('lista.ex1', compact('media'));
});

Route::get('/ex2', function(){
    return view('lista.ex2');
});

Route::post('/listaex2', function(Request $request){
    $celsius = $request->input('celsius');
    $fahrenheit = ($celsius * 9/5) + 32;
    return view('lista.ex2', compact('celsius', 'fahrenheit'));
});