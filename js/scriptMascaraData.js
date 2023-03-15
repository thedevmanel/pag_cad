"use strict";

const nascimento = document.getElementById('data_nascimento')

nascimento.addEventListener('keypress', () => {
  let nascimentolength = nascimento.value.length

  if (nascimentolength === 2 || nascimentolength === 5) {
    nascimento.value += '/'
  }  
})

const inicio = document.getElementById('data_inicio')

inicio.addEventListener('keypress', () => {
  let iniciolength = inicio.value.length

  if (iniciolength === 2 || iniciolength === 5) {
    inicio.value += '/'
  } 
})

const termino = document.getElementById('data_termino')

termino.addEventListener('keypress', () => {
  let terminolength = termino.value.length

  if (terminolength === 2 || terminolength === 5) {
    termino.value += '/'
  } 
})