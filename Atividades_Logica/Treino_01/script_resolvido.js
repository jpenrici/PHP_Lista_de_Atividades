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

///////////////////////////////////////////////////////////////
/* REVISÃO DE VARIÁVEIS, CONSTANTES, EXPRESSÕES E OPERADORES */
///////////////////////////////////////////////////////////////

// Declare uma variável chamada "numero" e atribua o valor dez.
let numero = 10;

// Declare uma variável chamada "numReal" e atribua o valor 10,50
let numReal = 10.5;

// Declare uma variável chamada "soma" e atribua a expressão aritmética de adição,
// somando "numero" com "numReal"
let soma = numero + numReal;

// Declare uma variável chamada "divisao" e atribua a expressão "10 / 0"
let divisao = 10.0;

// Declare uma variável chamada "caracter" e atribua o valor "A"
let caracter = "A";

// Declare uma variável chamada "espaco" e atribua o valor " "
let espaco = " ";

// Declare uma variável chamada "caracterEspecial_quebraDeLinha" e atribua o valor "\n"
let caracterEspecial_quebraDeLinha = "\n";

// Declare uma variável chamada "caracterEspecial_tabulacao" e atribua o valor "\t"
let caracterEspecial_tabulacao = "\t";

// Declare uma variável chamada "texto" e atribua o valor "isso é uma string"
var texto = "isso é uma string";

// Declare uma constante chamada "TEXTO" e atribua o valor "isso é uma constante"
const TEXTO = "isso é uma constante";

// Declare uma variável chamada "textoConcatenado1" e atribua a concatenação(Operador +)
// da string "texto" com "espaco" e "TEXTO"
var textoConcatenado1 = texto + espaco + TEXTO;

// Declare uma variável chamada "textoConcatenado2" e atribua a concatenação
// da string "texto" com "caracterEspecial_quebraDeLinha" e "TEXTO"
var textoConcatenado2 = texto + caracterEspecial_quebraDeLinha + TEXTO;

// Declare uma variável chamada "textoConcatenado3" e atribua a concatenação
// da string "texto" com "caracterEspecial_tabulacao" e "TEXTO"
var textoConcatenado3 = texto + caracterEspecial_tabulacao + TEXTO;

// Atribua a variável "TEXTO" o valor "o que acontece se atribuir novo valor a constante?"
//TEXTO = "o que acontece se atribuir novo valor a constante?"; // Constante não altera!

// Declare uma variável chamada "_varValida01" e atribua o valor Verdadeiro em JavaScript
let _varValida01 = true;

// Declare uma variável chamada "$varValida02" e atribua o valor Falso em JavaScript
let $varValida02 = false;

// Atribua a variável "$varValida02" o valor 1001
$varValida02 = 1001;

// Use a função interna do JavaScript chamada console.log() para exibir os resultados
// dos dados acima no terminal.
console.log(numero, numReal, soma);
console.log(divisao);
console.log(caracter, espaco, caracterEspecial_quebraDeLinha, caracterEspecial_tabulacao);
console.log(texto);
console.log(TEXTO);
console.log(textoConcatenado1);
console.log(textoConcatenado2);
console.log(textoConcatenado3);
console.log(_varValida01);
console.log($varValida02);

/////////////////////////////////////////////
/* REVISÃO DE CONVERSÃO DE TIPOS (CASTING) */
/////////////////////////////////////////////

// Declare a variável chamada "palavra" e atribua o valor tipo string "10"
let palavra = "10";
console.log("palavra", palavra);

// Declare a variável chamada "valor"
// e atribua a conversão da variável "palavra" para inteiro.
let valor = parseInt(palavra);
console.log("valor", valor);

// Declare a variável chamada "valor" 
// e atribua a conversão da variável "palavra" para real.
valor = parseFloat(palavra);
console.log("valor", valor);

//////////////////////////////////////
/* REVISÃO DE ESTRUTURA CONDICIONAL */
//////////////////////////////////////

// Construa uma tomada de decisão usando "Se" para exibir no terminal
// se a variável "numero" "É igual a 1000"
if (numero == 1000) {
    console.log("É igual a 1000");
}
// Ou
if (parseInt(numero) == parseInt(1000)) {
    console.log("É igual a 1000");
}

// Construa uma tomada de decisão usando "Se e Senão" para exibir no terminal
// se a variável "numero" "É par" ou "É ímpar"
if (parseInt(numero) % 2 == 0) {
    console.log("É par");
} else {
    console.log("É ímpar");
}

// Construa uma tomada de decisão usando "Se Senão, Se Senão ..." para exibir no terminal
// se a variável "numero" "É divisível por 5" ou "Não é divisível por 5",
// caso positivo, verificar se "É par" e exibir no terminal "É par"
if (parseInt(numero) % 5 == 0) {
    console.log("É divisível por 5");
    if (parseInt(numero) % 2 == 0) {
        console.log("É par");
    }
} else {
    console.log("Não é divisível por 5");
}

// Declare a variável chamada "opcao" e atribua o valor 2
let opcao = 2;

// Faça um teste pra exibir no terminal "Opção 1", "Opção 2", etc.
// Utilize o comando "switch".
switch (opcao) {
    case 1:
        console.log("Opção 1");
        break;
    case 2:
        console.log("Opção 2");
        break;        
    default:
        console.log("Opção padrão");
        break;
}

//////////////////////////
/* REVISÃO DE REPETIÇÃO */
//////////////////////////

// Use o comando(instrução) "for" para exibir no terminal "Este é o índice número X",
// onde X corresponde a variável de contagem da estrutura de repetição.
for(i = 0; i < 5; i++) {
    console.log("Este é o índice " + i);
}
// Decrescendo
for(j = 3; j > 0; j--) {
    console.log("Este é o índice " + j);
}

// Declare uma variável chamada "mensagem" e atribua um valor do tipo string vazio
let mensagem = "";

// Declare uma variável chamada "contador" e atrubua o valor zero
let contador = 0;

/*
 Use o comando(instrução) "while" para exibir no terminal "Este é o índice número X",
  onde X corresponde a variável "contador".
 Faça com que a variável "mensagem" armazene a sequência da contagem.
 Faça com que o "loop" pare quando contador atingir o valor dez.
 Exiba no terminal o texto da variável "mensagem"
*/ 
while (contador < 10) {
    console.log("Este é o índice(contador) " + contador);
    // Observe as formas alternativas.
    // mensagem = mensagem + contador + espaco;
    mensagem +=  contador + espaco;
    // contador = contador + 1;
    // contadod += 1;
    contador++;
}
console.log(mensagem);

/*
 Use o comando(instrução) "do while" para exibir no terminal "Este é o índice número X",
  onde X corresponde a variável "contador".
 Faça com que a variável "mensagem" armazene a sequência da contagem.
 Faça com que o "loop" pare quando contador atingir o valor negativo cinco.
 Exiba no terminal o texto da variável "mensagem"
*/ 
do {
    console.log("Este é o índice(contador) " + contador);
    // Observe as formas alternativas.
    mensagem = mensagem + contador + espaco;
    // mensagem +=  contador + espaco;
    // contador = contador - 1;
    contador -= 1;
    // contador--;
} while (contador > 5);
console.log(mensagem);

//////////////////////////////
/* REVISÃO DE ENTRADA/SAÍDA */
//////////////////////////////

// Explique o que acontece com o comando(instrução) abaixo se forem descomentados.

// window.prompt("Digite o seu nome:");
// Não roda no terminal!
// Abrindo no navegador, faz a pergunta mas não armazena!

// endereco = window.prompt("Digite o seu enderço:")
// Armazena o valor digitado, quando aberto no navegador.

// window.alert("Hello!");
// No navegador exibe Hello!

// window.alert("endereco");
// No navegador exibe endereco
// Se retirar as aspas duplas do "endereco", exibe o valor armazenado na variável endereco.

console.log("Terminei!!!");