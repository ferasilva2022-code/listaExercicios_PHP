<?php
// Exercício 12 (valor padrão). Escreva a função calcularTotal($preco, $quantidade = 1), que retorna o produto dos dois parâmetros. 
// Chame-a passando os dois argumentos e depois passando apenas o preço, exibindo ambos os resultados.

function calcularTotal($preco, $quantidade= 1){
    return $preco * $quantidade;
}

echo calcularTotal($preco=150, $quantidade=3);
?>