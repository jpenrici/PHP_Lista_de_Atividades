/*
50. Construa uma matriz 2X2 e, como saída desse programa, a média e a soma dos
valores digitados deverão ser calculadas.
*/

let linhas = 2;
let colunas = 2;
let matriz = new Array();

for (let i = 0; i < linhas; i++) {
    let linha = new Array();
    for (let j = 0; j < colunas; j++) {
        let numero = window.prompt("M[" + i + "," + j + "] Digite um número:");
        linha.push(numero);
    }
    matriz.push(linha);
}

let soma = 0;
for (let i = 0; i < linhas; i++) {
    for (let j = 0; j < colunas; j++) {
        soma += parseFloat(matriz[i][j]);
        console.log("M[" + i + "," + j + "]", matriz[i][j], soma);
    }
}

let media = soma / (linhas * colunas);
console.log(media);

window.alert("Soma: " + soma + "\nMédia: " + media);