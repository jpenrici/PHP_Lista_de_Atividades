/*
42. Construa um programa/página onde o usuário digitará dez números. O programa
deverá calcular quantos deles são maiores que dez.
*/

let quantidade = 10;
let vetor = new Array();

for (let i = 0; i < quantidade; i++) {
    let numero = window.prompt((i + 1) + ") Digite um número:");
    vetor.push(numero);
}

let contarMaiores = 0;
for (let i = 0; i < quantidade; i++) {
    let valor = parseFloat(vetor[i]);
    if (valor >= 10) {
        contarMaiores++;
    }
}

let mensagem = contarMaiores + " números são maiores que 10."
window.alert(mensagem);