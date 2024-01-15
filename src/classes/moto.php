<?php

namespace Cleidson\CursoApiComPhp\classes;

class Moto extends Veiculo{
 
   public function __construct(string $cor){
    {
        $quantidadeRodas = 2;
        $velocidadeMaxima = 220;

        parent::__construct($quantidadeRodas, $cor ,$velocidadeMaxima);
    }
   }
   
}