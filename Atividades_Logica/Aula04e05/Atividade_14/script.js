/*
14. Construa uma página onde o usuário digitará quatro notas escolares e o programa irá
calcular a média e, caso seja menor que 6, exibirá na tela: “Aluno Reprovado”. Caso
seja maior ou igual a 6 exibirá na tela: “Aluno Aprovado”.
15. Construa uma página/programa onde o usuário digitará t
*/

let nota_01 = window.prompt("Digite a primeira nota:");
let nota_02 = window.prompt("Digite a segunda nota:");
let nota_03 = window.prompt("Digite a terceira nota:");
let nota_04 = window.prompt("Digite a quarta nota:");
let media = (nota_01 + nota_02 + nota_03 + nota_04) / 4;
let mensagem = "Aluno Aprovado";

if (media < 6) {
    mensagem = "Aluno Reprovado";
}

window.alert(mensagem);