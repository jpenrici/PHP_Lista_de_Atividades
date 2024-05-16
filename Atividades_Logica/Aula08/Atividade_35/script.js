/*
35. Construa uma página/programa onde o usuário digitará dois números, utilizando
passagem de parâmetros e, dentro da função, irá calcular a soma desses dois
números.
*/

function soma(numero_01, numero_02)
{
    return parseFloat(numero_01) + parseFloat(numero_02);
}

let numero_01 = window.prompt("Digite o primeiro número:");
let numero_02 = window.prompt("Digite o segundo número:");

window.alert("A soma de " + numero_01 + " + " + numero_02 + " é " + soma(numero_01, numero_02));