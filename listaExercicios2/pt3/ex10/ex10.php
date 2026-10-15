<?php
    // Crie ex10.php, que devolve um $retorno padrão com status = 'ok' e uma lista de 3 produtos (id, nome, preco) em data. 
    // Depois, crie ex10.html com um botão que, ao clicar, usa fetch('ex10.php') e await resposta.json(); 
    // se resposta.status == 'ok', exiba o nome de cada produto na tela; caso contrário, exiba alert(resposta.mensagem)
    header('Content-Type: application/json; charset="utf-8"');
    
    $retorno =[
        'status' => 'ok',
        'data' => [
            ['id' => 1, 'nome' => 'Copo', 'preco' => 17.99],
            ['id' => 2, 'nome' => 'Ar Condicionado', 'preco' => 1804.91],
            ['id' => 3, 'nome' => 'Monitor', 'preco' => 1627.20]
        ]
    ];

    echo json_encode($retorno);




?>