/*
40. Construa uma página/programa onde o usuário digitará dez números e o programa
somará e calculará a média dos números digitados.
*/

let quantidade = 10;
let vetor = new Array();

for (let i = 0; i < quantidade; i++) {
    let numero = window.prompt((i + 1) + ") Digite um número:");
    vetor.push(numero);
}

let soma = 0;
for (let i = 0; i < quantidade; i++) {
    soma += parseFloat(vetor[i]);
}

let mensagem = "Soma: " + soma + "\nMédia dos " + quantidade + " números:" + (soma / parseFloat(quantidade));
window.alert(mensagem);