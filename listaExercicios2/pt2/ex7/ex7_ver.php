<?php 
session_start();

if(isset($_SESSION['usuario'])) {
    echo 'Usuário logado: '.$_SESSION['usuario'];
}else{
    echo "Sem sessão ativa";
}

echo '<br> <a href="ex7_sair.php">SAIR</a>';
echo  '| <a href="ex7_login.php">LOGIN</a>';

?>