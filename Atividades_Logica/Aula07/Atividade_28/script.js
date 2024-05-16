/*
TESTE DE MESTA

28. Qual é a saída do programa abaixo?
*/

var a = 5;
var b = 7;

for(i = 0; i <= 5; i++) {
    if (b < i) {
        console.log(a);
    }
    a = i - 1;
    b--;
}