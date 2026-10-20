<?php
//Exercício 3. Crie o array associativo $aluno com as chaves nome, curso e nota. 
// Exiba os três valores usando echo e acesse cada um pela chave (ex.: $aluno['nome']). 
// Depois, use print_r() para mostrar a estrutura completa do array.
$aluno=[
    'nome'=> 'Fer',
    'curso' => 'Eng. Software',
    'nota' => 9.3
];

echo 'Nome: ' .$aluno['nome']. '<br>';
echo 'Curso: ' .$aluno['curso']. '<br>';
echo 'Nota: ' .$aluno['nota']. '<br>';

print_r($aluno);
 ?>