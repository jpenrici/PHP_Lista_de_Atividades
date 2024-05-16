/*
21. Construa uma página/programa que o usuário digitará um número e a aplicação
completará o número digitado até completar cem.
*/

let numero_inicial = window.prompt("Digite o número inicial:");
let mensagem = numero_inicial;

while (numero_inicial < 100) {
    numero_inicial++;
    mensagem += " " + numero_inicial;
}

// window.alert(mensagem);
console.log(mensagem);