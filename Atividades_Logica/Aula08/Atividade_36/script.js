/*
36. Crie um jogo de par ou ímpar onde o computador irá gerar um número aleatório e o
usuário irá digitar um número. Após digitar o número, o programa irá utilizar um vetor
para resolver o jogo. Se a soma dos números for par, o usuário vence. Se for ímpar, o
computador vence.
*/

let computador = parseInt(Math.random() * 10);
let jogador = parseInt(window.prompt("Digite um número"));

let soma = computador + jogador;
console.log(computador, jogador, soma);

if (soma % 2 == 0) {
    window.alert("Jogador Venceu!");
} else {
    window.alert("Computador Venceu!");
}
