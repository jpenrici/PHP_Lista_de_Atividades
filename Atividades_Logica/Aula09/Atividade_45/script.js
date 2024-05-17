/*
45. Construa uma página/programa onde o usuário digitará o nome e a média de dez
alunos e o programa escreverá, na tela, o nome de todos com a média acima ou igual
a seis.
*/

let quantidade = 10;
let nomes = new Array();
let medias = new Array();

// Entrada
for (let i = 0; i < quantidade; i++) {
    let nome = window.prompt((i + 1) + ") Digite o nome:");
    let media = window.prompt((i + 1) + ") Digite a média:");
    nomes.push(nome);
    medias.push(media);
}

// Saída
let mensagem = "Alunos com Média acima ou igual a seis:";
for (let i = 0; i < quantidade; i++) {
    if (parseFloat(medias[i]) > 6.0) {
        mensagem += "\n" + nomes[i];
    }
}

window.alert(mensagem);