<?php
abstract class Veiculo{
   private  $quantidadeRodas;
   private  $velocidadeAtual;
   private  $velocidadeMaxima;
   private  $desacelerar;

   public function __construct(int $quantidadeRodas, int $velocidadeAtual, int $velocidadeMaxima, int $desacelerar){
    {
        $this->quantidadeRodas = $quantidadeRodas;
        $this->velocidadeAtual = $velocidadeAtual;
        $this->velocidadeMaxima = $velocidadeMaxima;
        $this->desacelerar = $desacelerar;
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

   public function obterQuantidadeRoda(){
    return $this->quantidadeRodas;
   }

   public function frear(){
    if ($this->velocidadeAtual - 1 > 0){
        $this->velocidadeAtual -= $this->desacelerar;
    }     
   }
   
}