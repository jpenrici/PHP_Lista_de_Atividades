/*
5. Construa uma página/programa onde o usuário digitará o ano que nasceu e o
programa irá escrever, na tela, quantos anos ele completará em 2040.
*/

let ano = window.prompt("Digite o ano em que você nasceu:");
let resultado = 2040 - parseInt(ano);
let mensagem = "Em 2040 você terá " + resultado;

window.alert(mensagem);