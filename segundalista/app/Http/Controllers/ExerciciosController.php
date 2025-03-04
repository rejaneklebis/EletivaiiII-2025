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

    public function abrirFormExer2(){
        return view('lista.ex2');
    }
   
    public function respostaExer2(Request $request){
        $valor1 = floatval($request->input('valor1'));
        $valor2 = floatval($request->input('valor2'));
        if ($valor1 === $valor2) {
            $resultado = "Números iguais: $valor1";
        } else {
            $valores = [$valor1, $valor2];
            sort($valores);
            $resultado = "Valores em ordem crescente: ".implode(' ', $valores);
        }
   
        return view('lista.ex2', compact('resultado'));
    }

    public function abrirFormExer3(){
        return view('lista.ex3');
    }

    public function respostaExer3(Request $request){
        $valorProduto = floatval($request->input('valorProduto'));

        if ($valorProduto > 100) {
            $desconto = $valorProduto * 0.15;
            $valorComDesconto = $valorProduto - $desconto;
            $resultado = "O valor original era R$" . number_format($valorProduto, 2, ',', '.') . 
                         " e com 15% de desconto fica R$" . number_format($valorComDesconto, 2, ',', '.');
        } else {
            $resultado = "O valor do produto é R$" . number_format($valorProduto, 2, ',', '.') . " (sem desconto)";
        }

        return view('lista.ex3')->with('retorno', true)->with('resultado', $resultado);
    }

}
