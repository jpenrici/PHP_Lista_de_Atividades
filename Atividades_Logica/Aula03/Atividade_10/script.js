/*
10. Construa um programa/página, onde o usuário irá digitar um número e o programa vai
escrever como resposta o cubo deste valor.
*/

let numero = window.prompt("Digite um número:");
let resultado = parseFloat(numero) * parseFloat(numero) * parseFloat(numero);
let mensagem = "O cubo de " + numero + " é " + resultado;

window.alert(mensagem);