<?php
function imprimirOsDezPrimeiroNumerosIteinros($quantidade = 10){
    for ($i = 1; $i <= $quantidade; $i++){
        echo $i . PHP_EOL;
    }
}

function imprimirOsDezPrimeiroNumerosIteinros2($quantidade = null){
    if (empty ($quantidade)){
        $quantidade = readline('informe o numero: ');
    }
    for ($i = 1; $i <= $quantidade; $i++){
        echo $i . PHP_EOL;
    }
}

function calcularAumento($salario): int 
{
    if(!is_numeric($salario)){
        throw new Exception('O salario deve ser numerico!');
    }
    if ($salario <= 1500){
        return $salario * 0.1;
    }else{
        return $salario * 0.05;
    }
}