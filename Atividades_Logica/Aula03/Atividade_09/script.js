/*
9. Construa uma página/programa onde o usuário irá digitar o seu salário. O programa irá
calcular e escrever, na tela, quanto descontará de vale-transporte (6%), plano de saúde
(3%) e quanto sobrará do salário.
*/

let valorDoSalario = window.prompt("Digite o valor do seu salário:");
let valeTransporte = parseFloat(valorDoSalario) * 0.06;
let planoDeSaude = parseFloat(valorDoSalario) * 0.03;
let valorDoSalarioLiquido = valorDoSalario - valeTransporte - planoDeSaude;
let mensagem = "Salário: " + valorDoSalario + "\nVale-transporte: " + valeTransporte + "\nPlano de saúde: " + planoDeSaude
    + "\nSaldo: " + valorDoSalarioLiquido;

window.alert(mensagem);