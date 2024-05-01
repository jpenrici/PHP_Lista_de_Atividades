/*
2. Construa uma página/programa onde o usuário digitará um número e o programa
escreverá, na tela, o resultado do quadrado deste número. Atenção: utilizar apenas
operadores básicos.
*/

let numero = window.prompt("Digite um número:");
let resultado = parseFloat(numero) * parseFloat(numero);
let mensagem = "O quadrado de " + numero + " é " + resultado;

window.alert(mensagem);