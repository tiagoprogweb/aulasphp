<?php include "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
<style>
    ol li:nth-child(odd) { color: blue; }
    ol li:nth-child(even) { color: red; }
</style>
</head>
<body>
<!-- Usando o foreach para acessar os dados
do array criado em outro arquivo (acessível
devido ao include) -->
<?php foreach($linguagens as $linguagem){ ?>
    <p><i><?=$linguagem?></i></p>
<?php } ?>

<h1>Loops</h1>
<hr>
<h2>Tradicionais: for, while, do/while</h2>

<h3>while</h3>
<?php
$i = 1;
while($i <= 3){
?>
    <p>Senac Penha - I vale <?=$i?> </p>
<?php
    $i++;
}
?>

<h3>do/while</h3>
<ul>

<?php 
$j = 1;
do {
?>
    <li>Item: <?=$j?></li>
<?php 
    $j++;
} while($j <= 5)
?>

</ul>

<h3>for</h3>
<?php
$alunos = ["Jean", "Giuseppe", "Arthur", "Pedro", "Paola"];

$quantidade = count($alunos);

for( $i = 0; $i < $quantidade; $i++ ){
?>
    <p> Aluno: <?=$alunos[$i]?> </p>
<?php
}
?>

<h3>foreach</h3>

<?php foreach( $alunos as $aluno ){ ?>
    <p> <?=$aluno?> </p>
<?php } ?>

<h2>Exercício 03</h2>

<p>1) Crie um array contendo o nome dos
12 meses do ano.</p>

<p>2) Monte uma <b>lista ordenada</b> exibindo
o nome de cada mês em um item.</p>

<p><b>DESAFIO:</b> <i>formate a lista
de uma forma que os meses apareçam com
cores alternadas. Exemplo: janeiro/março em
azul, fevereiro/abril em vermelho etc.
</i></p>

<?php
$meses = [
    "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"
];
?>

<ol>
<?php foreach($meses as $mes){ ?>
    <li> <?=$mes?> </li>
<?php } ?>
</ol>




</body>
</html>