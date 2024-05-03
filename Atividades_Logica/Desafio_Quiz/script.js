/*
    Desafio Relâmpago: A empresa JWC observou que os candidatos resolveram os desafios da lista de atividades,
    então lança um desafio em grupo. Junte-se, monte a equipe e desenvolva uma página/programa que faça um
    Jogo do tipo Perguntas e Respostas (Quiz) sobre o tema “Meio Ambiente e Emergência Climática”.
    Utilize variáveis, constantes, expressões, operadores, estruturas de controle condicional e os recursos
    já testados no recrutamento até o momento para resolver!

    Uma de muitas soluções poderia ser esta!
*/

// Declaração de constantes.
const EOL = "\n"; // Quebra de Linha (EOL = End of Line); \n chamado de caractere de escape para nova linha.
const COMPLEMENTO = "Digite o número da opção correta:";
const MSG_ACERTO = "Parabéns! Você acertou! \\o/";
const MSG_ERRO = "Você errou! Não desanime! :(";

// Declaração de variáveis que serão reutilizadas.
var pergunta, opcao_01, opcao_02, opcao_03, mensagem, quiz, resposta;
var contador_de_acertos = 0;
var contador_de_perguntas = 0;

////
// Aqui começa a sequência repetitiva, que será aprimorada no futuro em Funções.
////

// Pergunta 01
pergunta = "Aqui vc descreve a pergunta sem as opções de resposta.";
opcao_01 = "1) Bla bla bla";
opcao_02 = "2) Bla bla bla";
opcao_03 = "3) Bla bla bla";
resposta_certa = 1; // Coerente com a pergunta!

quiz = pergunta + EOL + opcao_01 + EOL + opcao_02 + EOL + opcao_03 + EOL + COMPLEMENTO;
resposta = window.prompt(quiz); // Entrada de dados

mensagem = MSG_ERRO; // Teste inicia considerando errada a resposta.
if (parseInt(resposta) == resposta_certa) {
    mensagem = MSG_ACERTO;
    contador_de_acertos = contador_de_acertos + 1;
}
contador_de_perguntas++;
window.alert(mensagem);

// Pergunta 02
pergunta = "Aqui vc descreve a pergunta sem as opções de resposta.";
opcao_01 = "1) Bla bla bla";
opcao_02 = "2) Bla bla bla";
opcao_03 = "3) Bla bla bla";
resposta_certa = 2; // Coerente com a pergunta!

quiz = pergunta + EOL + opcao_01 + EOL + opcao_02 + EOL + opcao_03 + EOL + COMPLEMENTO;
resposta = window.prompt(quiz); // Entrada de dados

mensagem = MSG_ERRO; // Teste inicia considerando errada a resposta.
if (parseInt(resposta) == resposta_certa) {
    mensagem = MSG_ACERTO;
    contador_de_acertos = contador_de_acertos + 1;
}
contador_de_perguntas++;
window.alert(mensagem);

// Nova pergunta copiando e colando a sequência acima.
// Outra pergunta copiando e colando a sequência acima.

////
// Fim do QUIZ e Pontuação.
////

window.alert("Você acertou " + contador_de_acertos + " de " + contador_de_perguntas + " perguntas !");