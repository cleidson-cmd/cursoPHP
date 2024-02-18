<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha primeira aplicação com laravel</title>
</head>

<body>
    <h1>Bem vindo ao meu site</h1>
    <h2>Olá {{ $nome }}</h2>

    <ul>
        @foreach($nomes as $nom)
        <li>{{ $nom }}</li>
        @endforeach
    </ul>

</body>

</html>