<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 (corrigido)</title>
</head>
<body>
    <h1>Exercício 02 (corrigido)</h1>
    <hr>

<?php
$dados = array(
    "usuario" => "chapolin.colorado",
    "senha" => "123teste",
    "idade" => 30,
    "cidade" => "São Paulo",
    "telefones" => [
        "fixo" => "11-2135-0300",
        "celular" => "11-91234-5678"
    ]
);
?>

<pre><?=var_dump($dados)?></pre>

<ol>
    <li>Nome de usuário:
    <?=$dados["usuario"]?>
    </li>

    <li>Idade:
    <?=$dados["idade"]?> anos 
    </li>

    <li>Cidade:
    <?=$dados["cidade"]?> 
    </li>

    <li>Telefones:
    <?=$dados["telefones"]["fixo"]?> 
    </li>
</ol>

    
</body>
</html>