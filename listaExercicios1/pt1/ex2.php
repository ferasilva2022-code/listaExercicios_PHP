<?php
// Exercício 2. Declare $produto = 'Caderno', $preco = 18.5 e $quantidade = 4. Exiba a frase "Produto: Caderno | Total: R$ 74" de duas formas: usando concatenação com ponto (.) e usando interpolação com aspas duplas. 
// Calcule o total com uma variável $total.
$produto = 'Caderno';
$preco = 18.5;
$quantidade = 4;
$total = $preco * $quantidade;

echo "Produto: ".$produto. " | Total: R$ ".$total. '<br>';
echo "Produto: $produto | Total: R$ $total <br>";
?>