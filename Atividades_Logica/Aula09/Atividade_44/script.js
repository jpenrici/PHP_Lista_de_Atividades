/*
44. Construa uma página/programa onde o usuário digitará cinco números e o programa
deverá colocar esses números dentro do vetor em ordem crescente.
*/

let quantidade = 5;
let vetor = new Array();

// Entrada
for (let i = 0; i < quantidade; i++) {
    let numero = window.prompt((i + 1) + ") Digite um número:");
    vetor.push(numero);
}

// Backup
let outroVetor = vetor;

// Simples - Bubble Sort
for (let i = 0; i < quantidade; i++) {
    for (let j = 0; j < quantidade - i - 1; j++) {
        if (outroVetor[j] > outroVetor[j + 1]) {
            // Swap
            let valorTemporario = outroVetor[j];
            outroVetor[j] = outroVetor[j + 1];
            outroVetor[j + 1] = valorTemporario;
        }
    }
}

// Usando funções da linguagem
// outroVetor.sort();

// Saída
let mensagem = "Sequência:";
for (let i = 0; i < quantidade; i++) {
    mensagem += " " + outroVetor[i];
}

window.alert(mensagem);