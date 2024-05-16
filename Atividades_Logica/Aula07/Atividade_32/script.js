/*
TESTE DE MESTA

32. Qual é a saída do programa abaixo?
*/

let f = 5;
let g = f--;

for(i=0;i<10;i++) {
    if(g > f) {
        i++;
        console.log(g + 1);
    }
    f ^ i;
    g = +i;
}