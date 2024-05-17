/*
48. Construa uma página/programa onde o usuário digitará o nome e o bairro de dez
pessoas. O programa exibirá o nome e bairro das pessoas em ordem alfabética.
*/

let quantidade = 10;
let nomes = new Array();
let bairros = new Array();
let lista = new Array();

// Entrada
for (let i = 0; i < quantidade; i++) {
    let nome = window.prompt((i + 1) + ") Digite o nome:");
    let bairro = window.prompt((i + 1) + ") Digite a bairro:");
    nomes.push(nome);
    bairros.push(bairros);
    lista.push(nome + ", " + bairro);
}

// Ordenar
lista.sort();

// Saída
let mensagem = "Lista:"
for (let i = 0; i < quantidade; i++) {
    mensagem += "\n" + lista[i];
}

window.alert(mensagem);