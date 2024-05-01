/*
15. Construa uma página/programa onde o usuário digitará três números e o programa
exibirá, na tela, o maior entre eles.
*/

let numero_01 = window.prompt("Digite o primeiro número:");
let numero_02 = window.prompt("Digite o segundo número:");
let numero_03 = window.prompt("Digite o terceiro número:");

let maior = numero_01;
if (numero_02 > maior) {
    maior = numero_02;
}
if (numero_03 > maior) {
    maior = numero_03;
}

window.alert("O maior número digitado é " + maior);