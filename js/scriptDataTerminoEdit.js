const active = document.getElementById("ativo")
const inactive = document.getElementById("inativo")
const terminoContainer = document.getElementById("termino-container")

function mostrarInputDataTermino() {
    if (inactive.checked) {
        return (terminoContainer.innerHTML = `
        <label for="data_termino" class="title-input"> data de termino: <span class="asterisco"> *
        </span> </label>
        <br /> <input type="date" name="data_termino" id="data_termino" class="inedition"
        autocomplete="off" value="" required placeholder="dd/mm/aaaa" /> <br />
        `)
    } else if (active.checked) {
        return (terminoContainer.innerHTML = '')
    }
}

inactive.addEventListener('change', mostrarInputDataTermino)
active.addEventListener('change', mostrarInputDataTermino)