const frontall = document.getElementById('frontall')
const balance = document.getElementById('balance')
const frontend = document.getElementById("frontend")
const backend = document.getElementById("backend")
const ba = document.getElementById("BA")
const qa = document.getElementById("QA")
const uiUX = document.getElementById("ui/ux")

const aparecerEscolha = document.getElementById('botoes-escolha')
const botaoFuncao = document.getElementById("botoes-funcoes")

function mostrarEscolha() {
    if (frontall.checked) {
        aparecerEscolha.innerHTML = `
		<div class="cradio">

        <input id="recruitment" type="radio" name="funcao" value="recruitment" required />
        <label for="recruitment" class="botao"> recruitment </label>

        <input id="sales" type="radio" name="funcao" value="sales" />
        <label for="sales" class="botao"> sales </label>

        <input id="adm/finance" type="radio" name="funcao" value="adm/finance" />
        <label for="adm/finance" class="botao"> adm/finance </label> <br /><br />   

        <input id="payrol" type="radio" name="funcao" value="payrol" />
        <label for="payrol" class="botao"> payrol </label> 
        
        <input id="people and culture" type="radio" name="funcao" value="people and culture" />
        <label for="people and culture" class="botao"> people and culture </label>
        
        <input id="marketing" type="radio" name="funcao" value="marketing" />
        <label for="marketing" class="botao"> marketing </label> <br /> <br /> 

        <input id="executive vp" type="radio" name="funcao" value="executive vp" />
        <label for="executive vp" class="botao"> executive vp </label> 
 
        <input id="custumer device" type="radio" name="funcao" value="custumer device" />
        <label for="custumer device" class="botao"> custumer device </label>

        <input id="it" type="radio" name="funcao" value="it" />
        <label for="it" class="botao"> it </label>

        </div>
        `
        botaoFuncao.style.display = "none"        
        

    } else if (balance.checked) {
        aparecerEscolha.innerHTML = `
		<div class="cradio">

        <input id="a" type="radio" name="funcao" value="frontend" required />
        <label for="a" class="botao"> Frontend </label>

        <input id="backend" type="radio" name="funcao" value="backend" />
        <label for="backend" class="botao"> Backend </label>

        <input id="BA" type="radio" name="funcao" value="BA" />
        <label for="BA" class="botao"> BA </label>

        <input id="QA" type="radio" name="funcao" value="QA" />
        <label for="QA" class="botao"> QA </label>

        <input id="ui/ux" type="radio" name="funcao" value="UI/UX" />
        <label for="ui/ux" class="botao"> ui/ux </label>
        </div>
        `
        
        botaoFuncao.style.display = "flex"        

    } else {
        return (aparecerEscolha.innerHTML = ``)
    }
}

frontall.addEventListener('click', mostrarEscolha)
balance.addEventListener('click', mostrarEscolha)
