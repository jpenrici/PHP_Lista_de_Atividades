/*
17. Construa uma página onde o usuário digitará duas notas escolares. Caso a média seja
abaixo de 4, o programa escreverá “Aluno Reprovado”. Caso a nota seja maior que
7, escreverá: “Aluno Aprovado Direto”. E, no caso em que a nota for maior que 4 e
menor que 7 escreverá: “Aluno em Recuperação”. No último caso, o programa deve
solicitar a nota de recuperação. Caso ela seja menor que 5, escrever: “Reprovado na
Recuperação” ou, caso contrário, escrever “Aprovado na Recuperação”.
*/

let nota_01 = window.prompt("Digite a primeira nota:");
let nota_02 = window.prompt("Digite a segunda nota:");
let media = (nota_01 + nota_02) / 2;

if (media > 7) {
  window.alert("Aluno Aprovado");
} else {
  // media <= 7
  if (media < 4) {
    window.alert("Aluno Reprovado");
  } else {
    // media >= 4 e media <= 7
    window.alert("Aluno em Recuperação");
    let nota_recuperacao = window.prompt("Digite a nota da recuperação:");
    if (nota_recuperacao < 5) {
      window.alert("Reprovado na Recuperação");
    } else {
      // nota_recuperacao >= 5
      window.alert("Aprovado na Recuperação");
    }
  }
}
