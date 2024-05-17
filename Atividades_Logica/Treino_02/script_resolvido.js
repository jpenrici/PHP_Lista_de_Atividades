/*
    Dicas:

    1) Leia atentamente todas as linhas de código, antes de iniciar.
    2) Leia cada linha comentada, escreva o código abaixo e teste ou observe.

    3) Executar no VS Code com o Node.js instalado.
        a) Abra o terminal no menu do VS Code.
        b) Verifique se o Node.js está funcionando digitando
           e posteriormente clicando Enter:
            node -v 
        c) Para executar este código no terminal, digite:
            node script.js
        d) Lembre-se de salvar o arquivo antes de rodar o node.
    
    Documentação e Instalação do Node.js:
        https://nodejs.org/en
        https://code.visualstudio.com/docs/nodejs/nodejs-tutorial

*/

/////////////////////
/* REVISÃO FUNÇÕES */
/////////////////////

// Declare uma Função sem parâmetro que exiba no console "Olá! Dev!!!".
function notificar() {
    console.log("Olá! Dev!!!");
}

// Declare uma Função com parâmetros que use a entrada de uma string com o "nome"
// e exiba "Olá! " concatenado ao "nome" e "!".
function notificar2(nome) {
    let mensagem = "Olá! " + nome + "!";
    console.log(mensagem);
}

// Declare uma Função sem parâmetros e com retorno de resultado.
// Função que devolva uma string "Mensagem Importante!".
function comunicado1() {
    let mensagem = "Mensagem Importante!";
    return mensagem;
}

// Declare uma Função com parâmetros e com retorno de resultado.
// Função que devolva a informação se um número é par ou ímpar.
function parOuimpar(numero) {
    if (parseInt(numero) % 2 == 0) {
        return "É par";
    }
    return "É ímpar";
}

// TESTES

// Declarando variáveis
let nomeCompleto = "Seu nome";
let numeroInteiro = 1001;

// Chamando as Funções
notificar();
notificar2(nomeCompleto);

let resposta = comunicado1();
console.log(resposta);

resposta = parOuimpar(numeroInteiro);
console.log(numeroInteiro, resposta);

// console.log("Terminei!!!");