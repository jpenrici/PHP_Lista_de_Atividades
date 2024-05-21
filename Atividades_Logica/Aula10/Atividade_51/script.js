/*
51. Construa um jogo Quadrado Mágico 3X3, no qual o usuário preencherá o vetor com
números de um a nove (sem repetir números) e a soma de todas as linhas, colunas e
diagonais será igual a quinze.

Fonte de Consulta: https://pt.wikipedia.org/wiki/Quadrado_m%C3%A1gico
*/

// Exibir Matriz Bidimensionais
function exibir(matriz, linhas, colunas) {
    let tabela = "";
    for (let i = 0; i < linhas; i++) {
        for (let j = 0; j < colunas; j++) {
            tabela += matriz[i][j] + " ";
        }
        tabela += "\n";
    }

    return tabela;
}

////////////////////////////////////////////////////////////////////////////////////
// Lógica do Jogo
////////////////////////////////////////////////////////////////////////////////////

// Configuração
let linhas = 3;
let colunas = 3;
let matriz = new Array(linhas).fill().map(() => new Array(colunas).fill('- '));
let numerosDigitados = new Array(linhas * colunas + 1).fill(false);
let somaEsperada = 15;

let titulo = "Quadrado Mágico 3 x 3";
let regra = "Digite números de 0 a 9 sem repetir!";

// Jogadas
for (let i = 0; i < linhas; i++) {
    for (let j = 0; j < colunas; j++) {
        let numero;
        let alerta = "";
        let tabela = exibir(matriz, linhas, colunas) + "\n";
        let jogada = "Número [" + i + "," + j + "]:";
        do {
            numero = parseInt(window.prompt(titulo + "\n" + regra + "\n\n" + tabela + alerta + jogada));
            if (numero >= 0 || numero <= 9) {
                if (numerosDigitados[numero] == false) {
                    numerosDigitados[numero] = true;
                    break;
                } else {
                    alerta = "REPETIDO! Redigite ";
                }
            }
        } while (true);
        // Incluir jogada
        matriz[i][j] = numero;
    }
}

// Matriz Exemplo Resolvido para teste
// matriz = [[2, 7, 6], [9, 5, 1], [4, 3, 8]]

// Verificar Regra
let jogoConcluido = true;
let somaHorizontal = 0;
let somaVertical = 0;
let somaDiagonalAscendente = 0;
let somaDiagonalDescendente = 0;
for (let i = 0; i < linhas; i++) {
    somaHorizontal = 0;
    somaVertical = 0;
    for (let j = 0; j < colunas; j++) {
        somaHorizontal += matriz[i][j];
        somaVertical += matriz[j][i];
    }
    if (somaHorizontal != 15 || somaVertical != 15) {
        jogoConcluido = false;
        break;
    }
    somaDiagonalAscendente += matriz[linhas - i - 1][i];
    somaDiagonalDescendente += matriz[i][i];
}

if (somaDiagonalAscendente != 15 || somaDiagonalDescendente != 15) {
    jogoConcluido = false;
}

// Log
console.log(matriz);
console.log(numerosDigitados);
console.log(somaHorizontal, somaVertical, somaDiagonalAscendente, somaDiagonalDescendente);

// Mensagem final
let mensagem = titulo + "\n" + exibir(matriz, linhas, colunas) + "\n";
if (jogoConcluido) {
    mensagem += "Parabéns! Você acertou!!!";
} else {
    mensagem += "Não foi dessa vez! Tente novamente!"
}
window.alert(mensagem);
