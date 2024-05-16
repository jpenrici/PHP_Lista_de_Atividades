/*
20. Construa uma página/programa que exiba, na tela, a contagem regressiva de dez a
zero.
*/

let mensagem = "Contagem regressiva:";
for (let i = 10; i >= 0; i--) {
    mensagem += " " + i;
}

// window.alert(mensagem);
console.log(mensagem);