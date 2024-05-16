/*
22. Construa uma página/programa onde o usuário digitará um número e o programa
completará o número digitado até cem, apenas com números pares.
*/

let numero_inicial = window.prompt("Digite o número inicial:");

// Checar se o número digitado é par
if (numero_inicial % 2 != 0) {
    numero_inicial++;
}

let mensagem = numero_inicial;
while (numero_inicial < 100) {
    numero_inicial += 2;
    mensagem += " " + numero_inicial;
}

// window.alert(mensagem);
console.log(mensagem);