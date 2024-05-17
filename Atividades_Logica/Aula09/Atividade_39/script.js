/*
39. Construa uma página/programa onde o usuário digitará seis números em um vetor e,
depois, esses números devem ser exibidos na tela na ordem digitada.
*/

let quantidade = 6;
let vetor = new Array();

for (let i = 0; i < quantidade; i++) {
    let numero = window.prompt((i + 1) + ") Digite um número:");
    vetor.push(numero);
}

let mensagem = "";
for (let i = 0; i < quantidade; i++) {
    mensagem += vetor[i] + " ";
}

window.alert(mensagem);