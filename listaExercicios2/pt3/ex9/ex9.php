<?php 
// Crie ex09.php, que recebe nome por $_POST (ou $_GET, para facilitar o teste). Se o nome estiver vazio, 
// devolva status = 'nok' e mensagem = 'Nome obrigatorio.'; caso contrário, 
// devolva status = 'ok' e mensagem = 'Registro recebido.'. 
// Em ambos os casos, o retorno deve seguir o mesmo formato JSON.

$retorno = [ 
    'status' => '',
    'mensagem' => '',
    'data' => []
];

$nome = $_POST['nome'] ?? '';

if(empty($nome)){
    $retorno['status'] = 'nok';
    $retorno['mensagem'] = 'Nome obrigatório';
    $retorno['data'] =['nome' => ''];

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($retorno);
}else{
    $retorno['status'] = 'ok';
    $retorno['mensagem'] = 'Registro recebido';
    $retorno['data'] = ['nome' => $nome];

    header('Content-Type: application/json; charset =utf-8');
    echo json_encode($retorno);
}



?>