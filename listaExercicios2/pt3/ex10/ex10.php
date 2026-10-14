<?php
    // Crie ex10.php, que devolve um $retorno padrão com status = 'ok' e uma lista de 3 produtos (id, nome, preco) em data. 
    // Depois, crie ex10.html com um botão que, ao clicar, usa fetch('ex10.php') e await resposta.json(); 
    // se resposta.status == 'ok', exiba o nome de cada produto na tela; caso contrário, exiba alert(resposta.mensagem)
    $retorno =[
        'status' => 'ok',
        'data' => []
    ];


?>