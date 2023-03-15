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
