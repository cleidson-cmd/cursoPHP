<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Drivers;


copy('./arcane.jpg', './copiaArcane.jpg');

$image = ImageManager::gd()->read("./copiaArcane.jpg");
$image->resize(300,200);//mudando a resolução da copia da imagem 
$image->save();
$image->flip();//deixa a imagem de cabeça para baixo
$image->greyscale();//escala de cinza
$image->blur(5)//embaça a imagem com base na numeração passada como parametro

?>
<!-- carrega a imagem com a resolução menor deixando mais rapido e quando o usuari clicar baixa a imagem com a qualidade maior -->
<a href="./arcane.jpg"><img src="./arcane.jpg" alt=""></a>