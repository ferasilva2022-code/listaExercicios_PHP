let btnConsultar = document.getElementById('btnConsultar');

btnConsultar.addEventListener('submit', async() => {
    const retorno = await fetch('ex10.php');

    if(!retorno.ok){
        console.log('ERRO: Problema com a requisição do servidor');
        alert('ERRO! Problema com a requisição do servidor');
    }

    const dados = await retorno.json();

    console.log('Dados recebidos do PHP: ', dados);
    alert('Deu certo');

    
});