/*
46. Construa uma página/programa que o usuário digitará o nome e a idade de dez
pessoas e o programa escreverá o nome do usuário mais novo.
*/

let quantidade = 10;
let nomes = new Array();
let idades = new Array();

// Entrada
for (let i = 0; i < quantidade; i++) {
    let nome = window.prompt((i + 1) + ") Digite o nome:");
    let idade = window.prompt((i + 1) + ") Digite a idade:");
    nomes.push(nome);
    idades.push(idade);
}

// Saída
let indice = 0;
let menorIdade = parseInt(idades[0]);
for (let i = 0; i < quantidade; i++) {
    if (parseInt(idades[i]) < menorIdade) {
        menorIdade = parseInt(idades[i]);
        indice = i;
    }
}

let mensagem = "Usuário mais novo:\n" + nomes[indice];
window.alert(mensagem);