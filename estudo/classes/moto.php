<?php
class Moto extends Veiculo{
   private  $quantidadeRodas;
   private  $velocidadeAtual;
   private  $velocidadeMaxima;
   private  $desacelerar;

   public function __construct(int $quantidadeRodas, int $velocidadeAtual, int $velocidadeMaxima){
    {
        $this->quantidadeRodas = $quantidadeRodas;
        $this->velocidadeAtual = $velocidadeAtual;
        $this->velocidadeMaxima = $velocidadeMaxima;
    }
   
    
    
   }
   
}