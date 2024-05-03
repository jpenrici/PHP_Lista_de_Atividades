/*
14. Construa uma página onde o usuário digitará quatro notas escolares e o programa irá
calcular a média e, caso seja menor que 6, exibirá na tela: “Aluno Reprovado”. Caso
seja maior ou igual a 6 exibirá na tela: “Aluno Aprovado”.
*/

let nota_01 = window.prompt("Digite a primeira nota:");
let nota_02 = window.prompt("Digite a segunda nota:");
let nota_03 = window.prompt("Digite a terceira nota:");
let nota_04 = window.prompt("Digite a quarta nota:");
let media = (parseFloat(nota_01) + parseFloat(nota_02) + parseFloat(nota_03) + parseFloat(nota_04)) / 4;
let mensagem = "Aluno Aprovado";

console.log("Média: ", media); // Observar na Ferramenta do Desevolvedor do Navegador.
if (parseFloat(media) < 6) {
    mensagem = "Aluno Reprovado";
}

window.alert(mensagem);