/*
    Dicas:

    1) Leia atentamente todas as linhas de código, antes de iniciar.
    2) Leia cada linha comentada, escreva o código abaixo e teste ou observe.

    3) Executar no VS Code com o Node.js instalado.
        a) Abra o terminal no menu do VS Code.
        b) Verifique se o Node.js está funcionando digitando
           e posteriormente clicando Enter:
            node -v 
        c) Para executar este código no terminal, digite:
            node script.js
        d) Lembre-se de salvar o arquivo antes de rodar o node.
    
    Documentação e Instalação do Node.js:
        https://nodejs.org/en
        https://code.visualstudio.com/docs/nodejs/nodejs-tutorial

*/

// Função extra pra comparar dois números e retornar (-1, 0 , 1).
function compareNumeros(a, b) {
    if (a < b) {
        // valor a menor que b, retornar -1
        return -1;
    }
    if (a > b) {
        // valor a maior que b, retornar 1
        return 1;
    }
    // valor a igual b, retornar 0
    return 0;
}

//////////////////////////////////
/* VETOR (ARRAY UNIDIMENSIONAL) */
//////////////////////////////////

let vetor = [10, 2, -1, 5, -2, 0, 100, 15];

console.log(vetor);
console.log(vetor[0]);
console.log(vetor[5]);
console.log(vetor[10]);
console.log(vetor[-1]);
console.log(vetor.length);
vetor.pop();
console.log(vetor.length);
vetor.push(-99);
console.log(vetor.sort());
console.log(vetor.sort(compareNumeros));
vetor[3] = 6;
console.log(vetor);
vetor[4] = vetor[0] - vetor[6];
console.log(vetor);

let vetor2 = vetor;
console.log(vetor2);

let vetor3 = new Array(5);
vetor3.fill("string");
console.log(vetor3);

//console.log("Terminei!!!");