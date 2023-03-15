"use strict";

function mostrarOcultarSenha() {
  var senha = document.getElementById("senha")

  if (senha.type == "password") {
    senha.type = "text";
  } else {
    senha.type = "password";
  }
}
function mostrarOcultarConfirmarSenha() {
  var confirmarSenha = document.getElementById("confirmar-senha")

  if (confirmarSenha.type == "password") {
    confirmarSenha.type = "text";
  } else {
    confirmarSenha.type = "password";
  }
}

let photo = document.getElementById("imgPhoto");
let file = document.getElementById("flImage");

photo.addEventListener("click", () => {
  file.click();
});

file.addEventListener("change", (event) => {
  if (file.files.length <= 0) {
    return 0;
  }

  let reader = new FileReader();

  reader.onload = () => {
    photo.src = reader.result;
  };

  reader.readAsDataURL(file.files[0]);
})
