
<form method="post" action ="ex6.php"> 
<label for="nome">Nome</label>
<input id="nome" name="nome" placeholder="Nome">
<br><br>
<label for="email">E-mail</label>
<input id="email" name="email" placeholder ="E-mail">
<br><br>
<button id="btnEnviar" type="submit">Enviar</button>

</form>

<?php
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

if (empty($nome)){
    echo "Nome obrigatório";
}else{
    echo "Olá, " .$nome;
}
?>