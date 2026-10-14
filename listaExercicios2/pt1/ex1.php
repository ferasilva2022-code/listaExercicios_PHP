<?php
// Aqui cria-se uma array chamada frutas e os dois comandos echo
// presentes vão printar a posição e a array completa, respectivamente.
$frutas = ['maçã', 'banana', 'laranja'];
echo 'Primeiro item da lista: '.$frutas[0]. '<br>';

$frutas[] = 'uva';
echo print_r($frutas);

?>