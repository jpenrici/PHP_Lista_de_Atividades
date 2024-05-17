/*
47. Construa uma página/programa onde o usuário digitará o nome, o telefone e a cidade
de dez pessoas. O programa exibirá, na tela, o nome e o telefone das pessoas que
moram em “Campo Grande”.
*/

let quantidade = 10;
let nomes = new Array();
let telefones = new Array();
let cidades = new Array();

// Entrada
for (let i = 0; i < quantidade; i++) {
    let nome = window.prompt((i + 1) + ") Digite o nome:");
    let telefone = window.prompt((i + 1) + ") Digite a telefone:");
    let cidade = window.prompt((i + 1) + ") Digite a cidade:");
    nomes.push(nome);
    telefones.push(telefone);
    cidades.push(cidade);
}

// Saída
let mensagem = "Cidadãos de Campo Grande:"
for (let i = 0; i < quantidade; i++) {
    if (cidades[i].toLowerCase() == "campo grande") {
        mensagem += "\n" + nomes[i] + ", " + telefones[i];
    }
}

window.alert(mensagem);