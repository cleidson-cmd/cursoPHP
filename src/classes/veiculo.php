<?php

namespace Cleidson\CursoApiComPhp\classes;

abstract class Veiculo{
   protected  $quantidadeRodas;
   protected  $cor;
   protected  $velocidadeAtual = 0;
   protected  $velocidadeMaxima;


   public function __construct(int $quantidadeRodas, string $cor, int $velocidadeMaxima){
    {
        $this->quantidadeRodas = $quantidadeRodas;
        $this->velocidadeMaxima = $velocidadeMaxima;
        $this->cor = $cor;
    }     
   }

   public function acelerar(){
    if ($this->velocidadeAtual + 1 <= $this->velocidadeMaxima){
        $this->velocidadeAtual ++;
    }      
   }

   public function obterVelocidade(){
    return $this->velocidadeAtual;
   }

   public function obterCor(){
    return $this->cor;
   }

   public function obterQuantidadeRoda(){
    return $this->quantidadeRodas;
   }

   public function frear(){
    if ($this->velocidadeAtual - 1 > 0){
        $this->velocidadeAtual --;
    }     
   }
   
}