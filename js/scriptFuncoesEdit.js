const frontend = document.getElementById("frontend")
const backend = document.getElementById("backend")
const ba = document.getElementById("BA")
const qa = document.getElementById("QA")
const uiUX = document.getElementById("ui/ux")

const botaoFuncao = document.getElementById("botoes-funcoes-edit")

function mostrarBotao1() {
    if (frontend.checked) {
        return (botaoFuncao.innerHTML = `
            <select class="nivel-funcoes-edit" name="nivel_funcao">
                <label class="nivel-funcoes-edit"> 
                    <option class=""nivel-funcoes-edit> JR  </option>
                    <option class=""nivel-funcoes-edit> MID </option>
                    <option class=""nivel-funcoes-edit> SR  </option> 
                </label>
            </select> 
        `)
    }
}

function mostrarBotao2() {
    if (backend.checked) {
        return (botaoFuncao.innerHTML = `
            <select class="nivel-funcoes-edit" name="nivel_funcao">
                <label class="nivel-funcoes-edit"> 
                    <option class=""nivel-funcoes-edit> JR  </option>
                    <option class=""nivel-funcoes-edit> MID </option>
                    <option class=""nivel-funcoes-edit> SR  </option> 
                </label>
            </select> 
        `)
    }
}

function mostrarBotao3() {
    if (ba.checked) {
        return (botaoFuncao.innerHTML = `
            <select class="nivel-funcoes-edit" name="nivel_funcao">
                <label class="nivel-funcoes-edit"> 
                    <option class=""nivel-funcoes-edit> JR  </option>
                    <option class=""nivel-funcoes-edit> MID </option>
                    <option class=""nivel-funcoes-edit> SR  </option> 
                </label>
            </select> 
        `)
    }
}

function mostrarBotao4() {
    if (qa.checked) {
        return (botaoFuncao.innerHTML = `
            <select class="nivel-funcoes-edit" name="nivel_funcao">
                <label class="nivel-funcoes-edit"> 
                    <option class=""nivel-funcoes-edit> JR  </option>
                    <option class=""nivel-funcoes-edit> MID </option>
                    <option class=""nivel-funcoes-edit> SR  </option> 
                </label>
            </select> 
        `)
    }
}

function mostrarBotao5() {
    if (uiUX.checked) {
        return (botaoFuncao.innerHTML = `
            <select class="nivel-funcoes-edit" name="nivel_funcao">
                <label class="nivel-funcoes-edit"> 
                    <option class=""nivel-funcoes-edit> JR  </option>
                    <option class=""nivel-funcoes-edit> MID </option>
                    <option class=""nivel-funcoes-edit> SR  </option> 
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