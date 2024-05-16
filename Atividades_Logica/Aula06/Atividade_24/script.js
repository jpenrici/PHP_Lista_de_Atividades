/*
24. Construa uma página onde o usuário digitará um valor e o programa mostrará, na tela,
a tabuada de multiplicação deste número.
*/

let numero = window.prompt("Digite o número:");
let mensagem = "Tabuada de " + numero + ":\n";

for (let i = 0; i <= 10; i++) {
    let multiplicacao = numero * i;
    mensagem += numero + " x " + i + " = " + multiplicacao + "\n";
}

window.alert(mensagem);
console.log(mensagem);