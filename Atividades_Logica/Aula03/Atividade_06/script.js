/*
6. Construa uma página/programa onde o usuário digitará o valor do seu salário e o
programa aumentará, em 15%, o valor digitado.
*/

let valorDoSalario = window.prompt("Digite o valor do seu salário:");
let resultado = parseFloat(valorDoSalario) * 1.15;
let mensagem = valorDoSalario + " + 15% = " + resultado;

window.alert(mensagem);