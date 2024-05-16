/*
27. Construa uma página que só aceite notas escolares entre zero e dez (treinamento
para controle de erros).
*/

let nota = window.prompt("Digite a nota:");
while (nota < 0 || nota > 10) {
  nota = window.prompt("Nota Inválida!\nDigite a nota novamente:");
}

window.alert("Nota: " + nota);
