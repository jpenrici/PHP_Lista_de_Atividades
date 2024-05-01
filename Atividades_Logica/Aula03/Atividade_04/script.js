/*
4. Construa uma página/programa onde o usuário digitará dois números e o programa
exibirá, na tela, o resultado das quatro operações básicas da matemática.
*/

let numero_01 = window.prompt("Digite o primeiro número:");
let numero_02 = window.prompt("Digite o segundo número:");

let soma = parseFloat(numero_01) + parseFloat(numero_02);
let subtracao = parseFloat(numero_01) - parseFloat(numero_02);
let multiplicacao = parseFloat(numero_01) * parseFloat(numero_02);
let divisao = parseFloat(numero_01) / parseFloat(numero_02);

let quebradelinha = "\n";
let mensagem = "Resultados:" + quebradelinha;
mensagem +=  numero_01 + " + " + numero_02 + " = " + soma + quebradelinha;
mensagem +=  numero_01 + " - " + numero_02 + " = " + subtracao + quebradelinha;
mensagem +=  numero_01 + " * " + numero_02 + " = " + multiplicacao + quebradelinha;
mensagem +=  numero_01 + " / " + numero_02 + " = " + divisao + quebradelinha;

window.alert(mensagem);