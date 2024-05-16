/*
TESTE DE MESTA

31. Qual é a saída do programa abaixo?
*/

let a = 7;
let b = 5;

for(i=0; i < 3; i++) {
    while(a > b) {
        console.log(i);
        a--;
        b++;
    }
    a++;
}