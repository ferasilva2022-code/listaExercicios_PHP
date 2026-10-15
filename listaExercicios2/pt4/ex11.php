<?php 
 //Exercício 11 (declaração e retorno). Escreva a função saudar($nome), 
 //que retorna 'Olá, ' . $nome . '!'. Chame a função com dois nomes 
 // diferentes e exiba os resultados com echo.
 
    function saudar($nome){
        return 'Olá, '.$nome.'!';
    }
    echo saudar('Ana');
    echo '<br>';
    echo saudar('Fernanda'); 
?>