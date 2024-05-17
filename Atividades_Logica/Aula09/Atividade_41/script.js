/*
41. Construa uma página/programa onde o usuário digitará oito números, o programa
escreverá na tela qual deles é o maior e qual deles é o menor.
*/

let quantidade = 8;
let vetor = new Array();

for (let i = 0; i < quantidade; i++) {
    let numero = window.prompt((i + 1)  + ") Digite um número:");
    vetor.push(numero);
}

let maior = parseFloat(vetor[0]);
let menor = parseFloat(vetor[0]);
for (let i = 0; i < quantidade; i++) {
    let valor = parseFloat(vetor[i]);
    if (valor >= maior) {
        maior = vetor[i];
    }
    if (valor <= menor) {
        menor = vetor[i];
    }
}

let mensagem = "Maior: " + maior + "\nMenor: " + menor;
window.alert(mensagem);