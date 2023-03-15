"use strict";

const input = document.getElementById('cpf')

input.addEventListener('keypress', () => {
  let inputlength = input.value.length

  if (inputlength === 3 || inputlength === 7) {
    input.value += '.'
  } else if (inputlength === 11) {
    input.value += '-'
  }
})

function apenasNumeros(event) {
  var charCode = event.which ? event.which : event.keyCode;
  if (charCode != 45 && charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  return true;
}
