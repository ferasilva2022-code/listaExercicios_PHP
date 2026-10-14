<?php 
$tabela = [
    'cliente1'=>['id' => '100', 'nome' => 'Giulio', 'email' => 'giulio@email.com'],
    'cliente2' => ['id' => '101', 'nome' => 'Patricia', 'email' => 'patricia@email.com'],
    'cliente3' => ['id' => '102', 'nome' => 'Abimael', 'email' => 'abimael@email.com']
];

header('Content-type: application/json; charset=utf-8');
$var1 = json_encode($tabela);
echo $var1;

$var = json_decode($var1);
echo json_decode($var1, true);
print_r($var);

$var2 = json_decode($var1, true);
print_r($var2['cliente2'] ['nome']);


?>