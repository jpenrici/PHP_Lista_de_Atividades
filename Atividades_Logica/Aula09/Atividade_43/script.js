/*
43. Construa uma página/programa onde o usuário digitará sete números e o programa
escreverá, na tela, quantos deles são pares e quantos são ímpares.
*/

let quantidade = 7;
let vetor = new Array();

for (let i = 0; i < quantidade; i++) {
    let numero = window.prompt((i + 1) + ") Digite um número:");
    vetor.push(numero);
}

let contarPares = 0;
let contarImpares = 0;
for (let i = 0; i < quantidade; i++) {
    let valor = parseInt(vetor[i]);
    if (valor % 2 == 0) {
        contarPares++;
    } else {
        contarImpares++;
    }
}

let mensagem = contarPares + " números são pares e " + contarImpares + " são ímpares.";
window.alert(mensagem);