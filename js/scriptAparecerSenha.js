function aparecer() {
    const senha = document.getElementById("senha")
    const confirmarSenha = document.getElementById("confirmar-senha")

    if (senha.value == '') {
        return (confirmarSenha.innerHTML = `
        `)
    } else {
        return (confirmarSenha.innerHTML = `
        <label for="confirmar_senha" class="title-input"> confirmar senha: </label> <span class="asterisco">*</span>
        <br /> <input type="password" name="confirmar_senha" id="confirmar_senha" class="inedition" required autocomplete="off"
            value="" placeholder="Confirme sua nova"" />
        <br /><br />
        `)
    }

}
confirmarSenha = addEventListener('input', aparecer())