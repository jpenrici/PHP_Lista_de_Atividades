/*
    Dicas:

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

// Controle Bancário - Simples

// Funções
function mensagem(texto) {
    console.log(texto);
}

function exibirSaldo(nome, saldo) {
    mensagem("Nome: " + nome + "\tSaldo: " + saldo);
}

function deposito(saldo, valor) {
    let calculado = saldo + valor;
    mensagem("Deposito de " + valor + " realizado com sucesso!");
    return calculado;
}

function saque(saldo, valor) {
    let calculado = saldo - valor;
    if (calculado < 0) {
        mensagem("Saldo: " + saldo + "\tSaque Desejado: " + valor + "\tSaldo insuficiente!");
        return saldo;
    }
    mensagem("Saque executado com sucesso!\nSaldo:" + calculado);
    return calculado;
}

// Dados
const nome1 = "Cliente A";
let saldo1 = 1;

const nome2 = "Cliente B";
let saldo2 = 10;

// Teste
exibirSaldo(nome1, saldo1);
saldo1 = deposito(saldo1, 0.50);
saldo1 = saque(saldo1, 100);
exibirSaldo(nome1, saldo1);
console.log();
exibirSaldo(nome2, saldo2);
saldo2 = deposito(saldo2, 1000);
saldo2 = saque(saldo2, 10000);
exibirSaldo(nome2, saldo2);

//console.log("Fim de Teste");