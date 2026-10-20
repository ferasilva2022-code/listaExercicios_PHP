<?php
// Exercício 1. Declare as variáveis $nome (string), $idade (integer), $altura (float), $ativo (boolean) e $apelido (null). 
// Exiba cada uma com echo e, em seguida, use var_dump() para mostrar o tipo de cada variável.

$nome = 'Fernanda';
$idade= 18;
$altura = 1.63;

$ativo = true;

$apelido= null;


echo  'NOME: '.$nome . " | ", var_dump($nome), '<br>';
echo  'IDADE: '.$idade .' anos | ',var_dump($idade), '<br>';
echo  'ALTURA: '.$altura . "m | ",var_dump($altura), '<br>';
echo  'ATIVO: '.$ativo .' | ',var_dump($ativo), '<br>';
echo  'APELIDO: '.$apelido . " | ",var_dump($apelido), '<br>';



?>