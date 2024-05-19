/*
    Construir uma solução matemática para ajudar o usuário a verificar
    se um número é menor do que o triplo de outro número.

    A < (3 * B) : Verdadeiro ou Falso
*/

// Funções

/**
 * Objetivo: retornar True ou False se num1 < (3 * num2)
 * 
 * @example
 *      verificar(2, 3); // true
 *      verificar(4, 1); // false
 *
 * @param {Number} num1 primeiro número
 * @param {Number} num2 segundo número
*/
function verificar(num1, num2) {

    // Converter para números (Garantir entradas númericas)
    let a = parseFloat(num1);
    let b = parseFloat(num2);

    // Checagem da condição
    if (a < (3 * b)) {
        // Se verdadeiro
        return true;
    }

    // Se falso
    return false;
}

/**
 * Objetivo:
 *  Retornar a resposta mais humanizada (informação) da função verificar(num1, num2)
 */
function mensagem(num1, num2) {
    let resposta = "Verdadeiro";
    if (verificar(num1, num2) != true) {
        resposta = "Falso";
    }

    // Retornar uma string
    return (
        "primeiro número: " + num1 + "\n" +
        "segundo número: " + num2 + "\n" +
        "resposta de " + num1 + " < (3 * " + num2 + " ) : " + resposta
    );
}

// Teste
let primeiroNumero = 1;
let segundoNumero = 1;
let resultado = "";

// Chamar função mais humana!
resultado = mensagem(primeiroNumero, segundoNumero);
console.log(resultado);

console.log(mensagem(2, 3)); // true
console.log(mensagem(4, 1)); // false
console.log("Fim do Teste");