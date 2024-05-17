/*
49. Construa uma página onde o usuário digitará o nome e a média de cinco alunos e o
programa só aceitará a média do aluno caso ela esteja entre zero e dez.
*/

let quantidade = 5;
let nomes = new Array();
let medias = new Array();

// Entrada
for (let i = 0; i < quantidade; i++) {

    let nome = window.prompt((i + 1) + ") Digite o nome:");
    nomes.push(nome);

    let media = 0;
    do {
        // Pergunta a média ao menos uma vez.
        media = parseFloat(window.prompt((i + 1) + ") Digite a média:"));
    } while (media < 0 || media > 10);
    medias.push(media);
}
