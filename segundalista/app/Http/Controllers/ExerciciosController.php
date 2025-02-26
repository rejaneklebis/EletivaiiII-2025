<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormExer1(){
        return view('lista.ex1');
    }

    public function respostaExer1(Request $request){
        $valor1 = floatval($request->input('valor1'));
        $valor2 = floatval($request->input('valor2'));
        if($valor1 === $valor2){
            $soma = 3 * ($valor1 + $valor2);
            $retorno = "Valores iguais. O triplo da soma é: $soma";
        }else{
            $soma = $valor1 + $valor2;
            $retorno = "A soma dos valores é: $soma";
        }
        
        return view('lista.ex1', compact('retorno'));
    }
}
