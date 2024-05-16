/*
25. Construa uma página/programa que exiba a sequência de Fibonacci de zero até dois
mil.

Sequência de Fibonacci (https://pt.wikipedia.org/wiki/Sequ%C3%AAncia_de_Fibonacci)

Na matemática, a sucessão de Fibonacci (ou sequência de Fibonacci), é uma sequência de números inteiros,
começando normalmente por 0 e 1, na qual cada termo subsequente corresponde à soma dos dois anteriores.

    0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, ...

Atenção ao construir e testar o loop por conta do processamento!

*/

let numero = 2000;
let mensagem = "Sequência de Fibonnaci (" + numero + "): 0 1";

let fn = 0;
let f1 = 0;
let f2 = 1;
while (fn < numero) {
    fn = f1 + f2;
    f1 = f2;
    f2 = fn;
    mensagem += " " + fn;
}

// window.alert(mensagem);
console.log(mensagem);