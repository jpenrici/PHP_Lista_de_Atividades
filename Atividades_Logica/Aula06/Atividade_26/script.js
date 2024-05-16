/*
26. Construa uma página/programa onde o usuário digitará um número, a página fará
uma contagem regressiva até zero e, depois, contará de zero até o número que o
usuário digitou.
*/

let numero = window.prompt("Digite o número:");
let regressiva = "";
let progressiva = "";

for (let i = 0; i <= numero; i++) {
    regressiva += " " + (numero - i);
    progressiva += " " + i;
}

// window.alert(mensagem);
// console.log(regressiva + progressiva);
console.log("Regressiva (" + numero + " a 0):" + regressiva + "\nProgressiva (0 a" + numero + "):" + progressiva);
