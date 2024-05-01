/*
12. Construa um programa/página onde o usuário irá digitar a sua idade e, caso a idade
seja maior ou igual a 18, terá como resposta “Maior de Idade”. Caso contrário, “Menor
de Idade”.
*/

let idade = window.prompt("Digite a sua idade:");
let mensagem = "Maior de idade";

if (idade <= 18) {
    mensagem = "Menor de Idade";
}

window.alert(mensagem);