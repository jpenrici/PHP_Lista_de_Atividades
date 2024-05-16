/*
34. Construa um programa/página onde o usuário digitará o seu nome e a saída dele será:
“Seja Bem-vindo(a), Nome do usuário“ com o nome do usuário (utilizar função).
*/

function mensagem(nome) {
  return "Seja Bem-vindo(a), " + nome;
}

let nome = window.prompt("Digite seu nome:");

window.alert(mensagem(nome));
