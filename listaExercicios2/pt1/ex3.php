<?php 
$tabela = [
    'cliente1'=>['id' => '100', 'nome' => 'Marcelina', 'email' => 'marcelina@email.com'],
    'cliente2' => ['id' => '101', 'nome' => 'Alef', 'email' => 'alef@email.com'],
    'cliente3' => ['id' => '102', 'nome' => 'Miguel', 'email' => 'miguel@email.com']
];

foreach ($tabela as $chave => $linha) {
    echo $chave. ': ' .$linha['id']. '- ' .$linha['nome']. '('.$linha['email']. ') <br>' ;
}
?>