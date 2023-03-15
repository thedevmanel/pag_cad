const botaoDelete = document.getElementById('delete-user')
const mensagem = document.getElementById('aparecer-mensagem-deletar')
const botaoSair = document.getElementById('sair-delete')

function mostrarMensagem() {
    return (mensagem.innerHTML = `
        <div class="conteiner-delete"></div>
            <div class="mensagem-deletar">
                <div class="content-deletar">
                    <div class="titulo-deletar">
                        você realmente deseja excluir o usuario?
                    </div> <br />
                    Lembre-se que depois desta ação, não haverá mais forma de reversão <br />

                    <div class="botoes-na-box-deletar">
                            <input type="submit" value="deletar" class="botao-para-deletar" />
                            <button class="sair-delete" id="sair-delete" onclick="tirarMensagem()"> voltar </button>
                    </div>
                </div>
            </div>
    `)
}

function tirarMensagem() {
    return (mensagem.innerHTML = ``)
}

botaoDelete.addEventListener('click', mostrarMensagem())
botaoSair.addEventListener('click', tirarMensagem())