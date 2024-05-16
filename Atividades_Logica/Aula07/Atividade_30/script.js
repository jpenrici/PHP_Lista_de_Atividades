/*
TESTE DE MESTA

30. Qual é a saída do programa abaixo?
*/

let k = 5;
let j = 10;

for(i=10;i>0;i--) {
    if (j % 2 == 0) {
        if (k > 0) {
            j--;
            console.log(j);
        }
    }
    j--;
    k--;
}