/*
16. Construa uma página onde o usuário digitará o seu peso e a sua altura e o programa
irá calcular o IMC (peso/altura). Caso o IMC seja maior que 25 exibirá, na tela, “Acima
do Peso Ideal”. Caso contrário, “Peso OK”.
*/

let peso = window.prompt("Digite o seu peso:");
let altura = window.prompt("Digite a sua altura:");
let IMC = peso / altura;

let mensagem = "Peso OK";
if (IMC > 25) {
    mensagem = "Acima do Peso Ideal.";
}

window.alert(mensagem);