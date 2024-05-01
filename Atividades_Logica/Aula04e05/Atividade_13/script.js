/*
13. Construa uma página onde o usuário digitará um número e o programa dirá se este
número é par ou ímpar.
*/

let numero = window.prompt("Digite um número:");
let mensagem = "É ímpar";

// Pra pensar:
// 1 / 2 = 0.5
// 1 % 2 = 1.0
// 4 / 2 = 2.0
// 4 % 2 = 0.0

if (numero % 2 == 0) {
    mensagem = "É par";
}

window.alert(mensagem);