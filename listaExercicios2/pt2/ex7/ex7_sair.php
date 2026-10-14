<?php 
session_start(); // precisa abrir pra poder destruir dps
session_unset(); // apaga as variaveis 
session_destroy(); // apaga a sessão no servidor

echo 'Sessão encerrada <br>';
echo '<a href="ex7_ver.php">Ver sessão</a>'
?>