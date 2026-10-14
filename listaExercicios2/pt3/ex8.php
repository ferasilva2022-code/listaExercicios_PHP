<?php
// Monte o array $retorno padrão do projeto, com status, mensagem e data vazios. Preencha-o como sucesso 
// (status = 'ok', mensagem = 'Consulta efetuada.')
//  e coloque em data um array com dois clientes (nome e email). Defina o header de JSON e exiba com json_encode().

$retorno = [ 
    'status' => '',
    'mensagem' => '',
    'data' => []
];

$retorno['status']= 'ok';
$retorno['mensagem'] = 'Consulta efetuada';
$retorno['data'] = [
    ['nome' => 'Fer', 'email' => 'fer@email.com'],
    ['nome' => 'Maraia', 'email' => 'maraia@email.com']
];

header('Content-Type: application/json; charset=utf-8');

echo json_encode($retorno,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>