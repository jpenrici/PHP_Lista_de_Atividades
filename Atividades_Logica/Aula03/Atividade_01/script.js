/*
 1. Construa uma página/programa onde o usuário digitará dois números e o programa
 dará, como resultado, a soma dos dois números.
*/

let numero_01 = window.prompt("Digite o primeiro número:");
let numero_02 = window.prompt("Digite o segundo número:");
let resultado = parseFloat(numero_01) + parseFloat(numero_02);
let mensagem = numero_01 + " + " + numero_02 + " = " + resultado;

window.alert(mensagem);
