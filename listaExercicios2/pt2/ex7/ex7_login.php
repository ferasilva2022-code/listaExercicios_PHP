<?php 
// LOGIN
session_start(); // cria/abre a sessão
$_SESSION['usuario']= 'Ana'; //grava o valor na sessão

echo 'Login feito como Ana. <br>';
echo '<a href="ex7_ver.php">Ver sessão</a>'


?>