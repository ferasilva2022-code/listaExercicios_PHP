<?php
// Exercício 13 (funções nativas). Dada a string $texto = ' Ana Silva ', use trim(), strtolower(), 
// strtoupper() e strlen() e exiba o resultado de cada uma. Depois, escreva a função 
// respostaPadrao($status, $mensagem, $data = []), que retorna o array padrão do 
// projeto (status, mensagem, data), e exiba o resultado de respostaPadrao('ok', 'Funcionando!') com json_encode().

$texto = ' Ana Silva ';

$sem_espaco= trim($texto);
$pequeno = strtolower($sem_espaco);
$grande = strtoupper($sem_espaco);
$tamanho = strlen($sem_espaco);

echo $sem_espaco ."<br>";
echo $pequeno."<br>";
echo $grande."<br>";
echo $tamanho."<br>";

function respostaPadrao($status,$mensagem,$data=[]){
    $retorno = [
        'status' => $status,
        'mensagem'=> $mensagem,
        'data' => $data
    ];
    return json_encode($retorno);
}
$projeto = respostaPadrao($status='ok',$mensagem='Funcionando!');

echo $projeto;

?>