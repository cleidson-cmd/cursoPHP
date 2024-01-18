<?php


$delete = $_GET['delete'] ?? "";
//unset($itensDoDiretorio[3]);
//var_dump($itensDoDiretorio);

if (!empty($delete)){
    unlink(base64_decode($delete));
}


//php -S localHost:8000 para iniciar um servidor local com php
$caminhoParaODiretorio = "./arquivos/";
$caminho = $_GET['diretorio'] ?? "";
//unset($itensDoDiretorio[3]);
//var_dump($itensDoDiretorio);

if (!empty($caminho)){
    $caminhoParaODiretorio = base64_decode($caminho);
}

$itensDoDiretorio = scandir($caminhoParaODiretorio);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Curso PHP</title>
</head>

<body>
    <!--EXIBIR O TITULO DA PAGINA CONCATENADO COM O NOME DO DIRETORIO -->
    <h1 class="mt-4 mb-4">Arquivos em: <?php echo $caminhoParaODiretorio ?></h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- SÓ IRA EXIBBIR SE HOUVER ARQUIVOS NO DIRETORIO -->
                <?php if (count($itensDoDiretorio) != 0) : ?>
                    <ul class="list-group">
                        <?php foreach ($itensDoDiretorio as $item) : ?>                          
                            <!-- se item for == a '.' e '..' que é o nome da pasta oculta que o wndow cria-->
                            <?php if (!in_array($item, ["."])) : ?> <!-- if (!in_array($item, [".",".."])) : ?> -->
                                <li class="list-group-item d-flex">
                                    <?php if (is_dir($caminhoParaODiretorio . $item)) : ?>   
                                        <div class="me-auto">
                                            <i class="bi bi-folder2"></i>
                                            <a href="?diretorio=<?php echo base64_encode($caminhoParaODiretorio . $item . '/');?>">
                                            <span><?php echo $item ?></span></a>
                                        </div>
                                    <?php else : ?>
                                        <div class="me-auto">
                                            <i class="bi bi-file-earmark-font"></i>
                                            <span><?php echo $item ?></span>
                                        </div>
                                        
                                    <?php endif ?>
                                    <?php if ($item != '..'):?>
                                        <a href="<?php echo  http_build_query($_GET);?>?&delete=<?php echo base64_encode($caminhoParaODiretorio . $item);?>">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    <?php endif ?>
                                </li>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif ?>
            </div>

        </div>
    </div>
</body>

</html>