/*
18. Construa um jogo de pedra, papel e tesoura.

Jogo Pedra, Papel e Tesoura
(https://pt.wikipedia.org/wiki/Pedra,_papel_e_tesoura)

Regras:
Os jogadores devem simultaneamente esticar a mão, na qual cada um formou um símbolo (que significa pedra, papel ou tesoura).
Então, os jogadores comparam os símbolos para decidir quem ganhou, da seguinte forma:

Pedra ganha da tesoura (amassando-a ou quebrando-a).
Tesoura ganha do papel (cortando-o).
Papel ganha da pedra (embrulhando-a).

A pedra é simbolizada por um punho fechado; a tesoura, por dois dedos esticados; e o papel, pela mão aberta.
Caso dois jogadores façam o mesmo gesto, ocorre um empate, e geralmente se joga de novo até desempatar.

Este jogo possui uma única regra: não é permitido mostrar pedra duas vezes seguidas.

*/

let pergunta = "digite (3) Pedra, (2) Tesoura ou (1) Papel:";
let jogador_01 = window.prompt("Jogador 1, " + pergunta);
let jogador_02 = window.prompt("Jogador 2, " + pergunta);

let mensagem = "Jogador 1: ";
switch (jogador_01) {
  case "3":
    mensagem += "Pedra";
    break;
  case "2":
    mensagem += "Tesoura";
    break;
  case "1":
    mensagem += "Papel";
    break;
  default:
    mensagem += "?";
    break;
}

mensagem += "\nJogador 2: ";
switch (jogador_02) {
  case "3":
    mensagem += "Pedra";
    break;
  case "2":
    mensagem += "Tesoura";
    break;
  case "1":
    mensagem += "Papel";
    break;
  default:
    mensagem += "?";
    break;
}

// Cuidado ao comparar números tipados como strings!
let resultado = "Empate";
if (jogador_01 > jogador_02) {
  resultado = "Jogador 01 ganhou";
}
if (jogador_01 < jogador_02) {
  resultado = "Jogador 02 ganhou";
}

window.alert(mensagem + "\n" + resultado);
