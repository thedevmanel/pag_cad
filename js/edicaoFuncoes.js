const frontall = document.getElementById('frontall')
const balance = document.getElementById('balance')
const boxFuncao = document.getElementById('funcao-edicao')

function mostrarEscolha() {
    if (frontall.checked) {
        document.getElementById('select-frontall').style.display = "flex"
        document.getElementById('select-balance').style.display = "none"   
        boxFuncao.style.display = "none"         
        document.getElementById('edicao-select-balance').value = ""

        boxFuncao.innerHTML = ``

    } else if (balance.checked) {
        document.getElementById('select-frontall').style.display = "none"
        document.getElementById('select-balance').style.display = "flex"         
        boxFuncao.style.display = "block"
        document.getElementById('edicao-select-frontall').value = ""

        boxFuncao.innerHTML = `
        <input id="jr" type="radio" name="nivel_funcao" value="JR" required />
        <label for="jr" class="botao"> JR </label>

        <input id="mid" type="radio" name="nivel_funcao" value="MID" />
        <label for="mid" class="botao"> MID </label>

        <input id="sr" type="radio" name="nivel_funcao" value="SR" />
        <label for="sr" class="botao"> SR </label>
        `
    } else {
        document.getElementById('select-frontall').innerHTML = ``
        document.getElementById('select-balance').innerHTML = ``
    }
}
function selectBalance(p) {
    let box = document.getElementById('escolhas-select-balance')
    var parametros = ['block', 'none']
    box.style.display = parametros[p]

    const divSelect = document.getElementById("container-box-balance")
    var comprimento = ['125px', '20px']
    divSelect.style.height = comprimento[p]

    const checkboxs = document.getElementById('funcao-edicao')
    var largura = ['80px', '0px']
}   

function dadosBalance (c) {
    var dados = document.getElementById('dados-balance' + c).innerHTML
    document.getElementById('edicao-select-balance').value = dados
}

function selectFrontall(p) {
    let box = document.getElementById('escolhas-select-frontall')
    var parametros = ['block', 'none']
    box.style.display = parametros[p]

    const divSelect = document.getElementById("container-box-frontall")
    var comprimento = ['225px', '20px']
    divSelect.style.height = comprimento[p]
}   

function dadosFrontall (c) {
    var dados = document.getElementById('dados-frontall' + c).innerHTML
    document.getElementById('edicao-select-frontall').value = dados
}

frontall.addEventListener('click', mostrarEscolha)
balance.addEventListener('click', mostrarEscolha)