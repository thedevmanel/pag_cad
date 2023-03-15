const frontend = document.getElementById("frontend")
const backend = document.getElementById("backend")
const ba = document.getElementById("BA")
const qa = document.getElementById("QA")
const uiUX = document.getElementById("ui/ux")

const botaoFuncao = document.getElementById("botoes-funcoes")

function mostrarBotao1() {
    if (frontend.checked) {
        return (botaoFuncao.innerHTML = `
            <select class="cad-funcoes" name="nivel_funcao">
                <label class="tudo"> 
                    <option class="cad-funcoes"> JR  </option>
                    <option class="cad-funcoes"> MID </option>
                    <option class="cad-funcoes"> SR  </option> 
                </label>
            </select> 
        `)
    }
}

function mostrarBotao2() {
    if (backend.checked) {
        return (botaoFuncao.innerHTML = `
            <select class="cad-funcoes" name="nivel_funcao">
                <label class="tudo"> 
                    <option class="cad-funcoes"> JR  </option>
                    <option class="cad-funcoes"> MID </option>
                    <option class="cad-funcoes"> SR  </option> 
                </label>
            </select> 
        `)
    }
}

function mostrarBotao3() {
    if (ba.checked) {
        return (botaoFuncao.innerHTML = `
            <select class="cad-funcoes" name="nivel_funcao">
                <label class="tudo"> 
                    <option class="cad-funcoes"> JR  </option>
                    <option class="cad-funcoes"> MID </option>
                    <option class="cad-funcoes"> SR  </option> 
                </label>
            </select> 
        `)
    }
}

function mostrarBotao4() {
    if (qa.checked) {
        return (botaoFuncao.innerHTML = `
            <select class="cad-funcoes" name="nivel_funcao">
                <label class="tudo"> 
                    <option class="cad-funcoes"> JR  </option>
                    <option class="cad-funcoes"> MID </option>
                    <option class="cad-funcoes"> SR  </option> 
                </label>
            </select> 
        `)
    }
}

function mostrarBotao5() {
    if (uiUX.checked) {
        return (botaoFuncao.innerHTML = `
            <select class="cad-funcoes" name="nivel_funcao">
                <label class="tudo"> 
                    <option class="cad-funcoes"> JR  </option>
                    <option class="cad-funcoes"> MID </option>
                    <option class="cad-funcoes"> SR  </option> 
                </label>
            </select> 
        `)
    }
}

frontend.addEventListener('change', mostrarBotao1)
backend.addEventListener('change', mostrarBotao2)
ba.addEventListener('change', mostrarBotao3)
qa.addEventListener('change', mostrarBotao4)
uiUX.addEventListener('change', mostrarBotao5)