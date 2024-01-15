<?php

require"vendor/autoload.php";//para funcionar o compose 
use Cleidson\CursoApiComPhp\classes\Carro;
use Cleidson\CursoApiComPhp\classes\Moto;

$carro = new Carro("vermelho");

echo $carro->obterQuantidadeRoda() . $carro->obterCor() . PHP_EOL;

echo '==========================';

$moto = new Moto('Azul');
echo $moto->obterQuantidadeRoda() .  $moto->obterCor() . PHP_EOL;


$climate = new \League\CLImate\CLImate;

$climate->out('Ola Mundo!');
$climate->red('Ola Mundo!');
$climate->lightBlue('Ola Mundo!');
$data = [
    [
      'Walter White',
      'Father',
      'Teacher',
    ],
    [
      'Skyler White',
      'Mother',
      'Accountant',
    ],
    [
      'Walter White Jr.',
      'Son',
      'Student',
    ],
];

$climate->table($data);


