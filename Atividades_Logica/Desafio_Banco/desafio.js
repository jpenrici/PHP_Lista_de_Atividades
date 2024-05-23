/*
    Dicas:

    1) Leia atentamente todas as linhas de código, antes de iniciar.
    2) Observe a construção das Classes e métodos (funções).
    3) Complete este simples controle de bancário.

    4) Executar no VS Code com o Node.js instalado.
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

// Controle Bancário - POO

class Conta {
    constructor(nome, capitalInicial) {
        this.nome = nome;
        this.saldo = capitalInicial;
    }

    transacao(valor) {
        // Completar para executar Saque, Depósito.
    }

    extrato() {
        // String : relatório ou extrato.
        return ("Nome: " + this.nome + "\nSaldo: " + this.saldo + "\n");
    }

    mensagem(texto) {
        // Saída genérica no terminal.
        console.log(texto);
    }

    exibirExtrato() {
        // Saída especializada para extrato no terminal.
        console.log(this.extrato());
    }

}

class Banco {

    constructor() {
        this.contas = new Array();  // Armazenar contas.
    }

    abrir(conta) {
        // Completar para executar a inserção de nova conta.
    }

    transacao(numeroDaConta, valor) {
        // Completar para executar a transação na conta.
    }

    listarContas() {
        // Exibir relatório de contas do banco.
    }

}

// Teste
const bancoJWC = new Banco();

bancoJWC.abrir(new Conta("Cliente A", 1));
bancoJWC.abrir(new Conta("Cliente B", 10));

bancoJWC.contas[0].exibirExtrato(); // Acesso a conta específica.

bancoJWC.transacao(-1, 10);     // Prevenir entradas erradas.
bancoJWC.transacao(1000, 10);   // Prevenir entradas suspeitas.

bancoJWC.transacao(1, 100);
bancoJWC.listarContas();
