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

//medir a profundidade de um array
function listaArray(array $array){
    if (!is_null($array)){
        foreach ($array as $item){

            if (!is_array($item)){
                //não é um array
                echo  $item . PHP_EOL;

            }else{
                //se for um array eu chamo a mesma função para varrer a sublista 
                //isso chama recursão chamo a mesma função dentro dela mesma 
                listaArray($item);
            }
        }
    }
}