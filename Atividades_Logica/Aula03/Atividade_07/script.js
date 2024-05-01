/*
7. Construa uma página/programa onde o usuário digitará o valor de um produto e o
programa descontará 7% desse valor.
*/

let valor = window.prompt("Digite o valor do produto:");
let resultado = parseFloat(valor) * 0.93;
let mensagem = valor + ", com desconto fica em " + resultado;

window.alert(mensagem);