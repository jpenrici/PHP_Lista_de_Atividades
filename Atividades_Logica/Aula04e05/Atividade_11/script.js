/*
11. Construa uma página/programa onde o usuário digitará dois números e o programa
exibirá na tela, ou por meio de um alert, o menor dos números digitados.
*/

let numero_01 = window.prompt("Digite o primeiro número:");
let numero_02 = window.prompt("Digite o segundo número:");
let mensagem = "O menor número digitado é ";

if (numero_01 < numero_02) {
    mensagem += numero_01;
} else {
    mensagem += numero_02;
}

window.alert(mensagem);