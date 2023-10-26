<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (corrigido)</title>
</head>
<body>
    <h1>Exercício 01 (corrigido)</h1>
    <hr>

<?php
const NOME = "Chapolin";
$idade = 25;

// VERSÃO COMPLETA, TRADICIONAL
echo "<p><i>".NOME."</i> possui <b> $idade anos</b>.</p>";
?>

<!-- VERSÃO SIMPLIFICADA/ABREVIADA -->
<p><i><?=NOME?></i> possui <b><?=$idade?> anos.</b></p>

</body>
</html>