let btnConsultar = document.getElementById('btnConsultar');
let produtos = document.getElementById('produtos');
console.log('passo1');

btnConsultar.addEventListener('click', async () => {
    // console.log('passo1');
    try {
        const retorno = await fetch('ex10.php');

        if (!retorno.ok) {
            alert('ERRO! Problema com a requisição do servidor');
            return; // Interrompe a execução caso haja erro HTTP
        }

        const dados = await retorno.json();

        if (dados.status === 'ok') {
            produtos.innerHTML = '';
            
            dados.data.forEach(produto => {
                const li = document.createElement('li');
                li.textContent = produto.nome;
                produtos.appendChild(li);
            });
        } else {
            alert(dados.mensagem || 'ERRO ao processar dados.');
        }

        console.log('Dados recebidos do PHP: ', dados);
    } catch (erro) {
        console.error('Erro na requisição: ', erro);
        alert('Erro ao se conectar com o servidor.');
    }
});