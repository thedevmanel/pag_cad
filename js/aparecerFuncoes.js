const frontall = document.getElementById('frontall')
const balance = document.getElementById('balance')
const boxFuncao = document.getElementById('radio-from-funcao')

function mostrarEscolha() {
    if (frontall.checked) {
        document.getElementById('botoes-escolha').style.display = "flex"
        document.getElementById("botoes-funcoes").style.display = "none"      
        document.getElementById("radio-from-funcao").style.display = "none"  
        document.getElementById("new-select-input-balance").value = ""

        boxFuncao.innerHTML = ``
        
    } else if (balance.checked) {
        document.getElementById('botoes-escolha').style.display = "none"
        document.getElementById("botoes-funcoes").style.display = "flex"        
        document.getElementById("radio-from-funcao").style.display = "block"  
        document.getElementById("new-select-input-frontall").value = ""

        boxFuncao.innerHTML = `
        <input id="jr" type="radio" name="nivel_funcao" value="JR" required />
        <label for="jr" class="botao"> JR </label>

        <input id="mid" type="radio" name="nivel_funcao" value="MID" />
        <label for="mid" class="botao"> MID </label>

        <input id="sr" type="radio" name="nivel_funcao" value="SR" />
        <label for="sr" class="botao"> SR </label>
        `

    } else {
        return (document.getElementById('botoes-escolha').innerHTML = ``)
    }
}

function selectBalance(p) {
    let box = document.getElementById('new-select-box-balance')
    var parametros = ['block', 'none']
    box.style.display = parametros[p]

    const divSelect = document.getElementById("conteiner-select-balance")
    var comprimento = ['160px', '50px']
    divSelect.style.height = comprimento[p]
}

function options(c) {
    var info = document.getElementById('item' + c).innerHTML
    document.getElementById('new-select-input-balance').value = info
}

function selectFrontall(p) {
    let box = document.getElementById('new-select-box-frontall')
    var parametros = ['block', 'none']
    box.style.display = parametros[p]

    const divSelect = document.getElementById("container-select-frontall")
    var comprimento = ['260px', '50px']
    divSelect.style.height = comprimento[p]
}

function choose (c) {
    var info = document.getElementById('choose' + c).innerHTML
    document.getElementById('new-select-input-frontall').value = info
}

frontall.addEventListener('click', mostrarEscolha)
balance.addEventListener('click', mostrarEscolha)
