/*
    Dica:

    1) Executar no VS Code com o Node.js instalado.
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

function formatar(texto) {
    let output = "";
    for (let i = 0; i < texto.length; i += 2) {
        output += texto[i + 1] + texto[i + 0];
    }
    return output;
}

// Teste
let mensagem = "Parabéns-Dev!!!!-Deixe-01-msg-feliz-pros-colegas!!!!";
let esperado = "aParébsnD-ve!!!!D-ieex0--1sm-gefil-zrpsoc-logesa!!!!";

console.log(formatar(mensagem) == esperado);
console.log(formatar(esperado) == mensagem);