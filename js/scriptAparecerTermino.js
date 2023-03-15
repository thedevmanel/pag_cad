const active = document.getElementById("ativo")
const inactive = document.getElementById("inativo")
const terminoContainer = document.getElementById("termino-container")

function mostrarInputDataTermino() {
    if (inactive.checked) {
        return (terminoContainer.innerHTML = `
        <label for="termino" class="tudo"> Data Termino </label> 
        <input type="date" placeholder="teste" id="termino" name="data_termino" class="termino" maxlength="10" /> <br />
        `)
    } else if (active.checked) {
        return (terminoContainer.innerHTML = '')
    }
}

inactive.addEventListener('change', mostrarInputDataTermino)
active.addEventListener('change', mostrarInputDataTermino)