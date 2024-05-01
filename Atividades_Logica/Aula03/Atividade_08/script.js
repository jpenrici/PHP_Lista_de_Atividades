/*
8. Construa uma página/programa onde o usuário digitará o valor do seu salário e o
programa irá escrever quanto será o desconto de 6% referente ao vale-transporte.
*/

let valorDoSalario = window.prompt("Digite o valor do seu salário:");
let desconto = parseFloat(valorDoSalario) * 0.06;
let mensagem = valorDoSalario + ", vale-transporte = " + desconto;

window.alert(mensagem);