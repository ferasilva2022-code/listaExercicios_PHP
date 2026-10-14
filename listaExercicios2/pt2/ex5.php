<?php
if (isset($_GET['id'])) {
    echo "Buscando o registro " . (int)$_GET['id'];
} else{
    echo 'Nenhum ID informado';
}

?>