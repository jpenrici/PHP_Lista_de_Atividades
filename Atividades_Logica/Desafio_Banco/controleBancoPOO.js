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

/*
 Controle Bancário - POO

 Visão Geral:
    A classe Conta gerencia contas únicas e não sabe o que ocorre no restante do código.
    A classe Banco usa indiretamente a classe Conta para armazená-las em Array.
    A classe Pix somente possuí um método de transação entre as classes Banco.
*/

class Conta {

    constructor(nome, capitalInicial) {
        this.nome = nome;
        this.saldo = capitalInicial;
    }

    // Entrada e Saída de valor.
    transacao(valor) {
        let saldoTemporario = this.saldo + valor;
        if (saldoTemporario >= 0) {
            // Transação liberada e saldo atualizado.
            this.saldo = saldoTemporario;
            return true;
        }

        // Transação recusada e saldo inalterado.
        return false;
    }

    // Saque, Débito, Retirada, Saída de valor.
    saque(valor) {
        if (this.transacao(valor)) {
            this.mensagem("Saque de " + valor + " realizado com sucesso!");
        } else {
            this.mensagem("Saldo: " + this.saldo + "\tSaque desejado: " + this.valor + "\tSaldo insuficiente!");
        }
    }

    // Depósito, Crédito, Entrada de valor.
    deposito(valor) {
        if (this.transacao(valor)) {
            this.mensagem("Deposito de " + valor + " realizado com sucesso!");
        }
    }

    extrato() {
        return ("Nome: " + this.nome + "\nSaldo: " + this.saldo);
    }

    mensagem(texto) {
        console.log(texto);
    }

    exibirExtrato() {
        console.log(this.extrato());
    }

}

class Banco {

    constructor(nomeDoBanco) {
        this.nome = nomeDoBanco;
        this.contas = new Array();
    }

    /**
     * Abrir conta.
     *
     * @param {Object} conta objeto da classe Conta a ser armazenado em Array.
     */
    abrir(conta) {
        this.contas.push(conta);
    }

    checarConta(numero) {
        // Retorna Verdadeiro se número estiver no intervalo válido do Array.
        return (numero >= 0 && numero < this.contas.length);
    }

    /**
     * Transação na conta dentro do banco.
     * 
     * @param {Number} numero número do índice do Array para expressar o número da conta.
     * @param {Number} valor 
     */
    transacao(numero, valor) {
        console.log("Log: Transação (Banco " + this.nome + ", Conta: " + numero + " Valor: " + valor + ")");

        if (!this.checarConta(numero)) {
            console.log("Banco " + this.nome + ", Conta número " + numero + " inexistente!");
            return false;
        }

        if (this.contas.at(numero).transacao(valor)) {
            console.log("Banco " + this.nome + ". Obrigado por utilizar nossos serviços!");
        } else {
            console.log("Banco " + this.nome + ". Erro! Consulte à gerência!");
        }

        return true;
    }

    listar() {
        for(let i = 0; i < this.contas.length; i++) {
            console.log("Banco " + this.nome + ", Conta [" + i + "]\n" + this.contas[i].extrato());
        }
    }

}

class PIX {

    /**
     * Transação PIX
     * 
     * @param {Object} banco1 objeto da classe Banco
     * @param {Number} contaRemententeDoBanco1 índice no Array do Banco 1
     * @param {Object} banco2 objeto da classe Banco
     * @param {Number} contaDestinatarioDoBanco2  índice no Array do Banco 2
     * @param {Number} valor 
     */
    static transacao(banco1, contaRemententeDoBanco1, banco2, contaDestinatarioDoBanco2, valor) {
        // Checar se contas existem.
        let statusRemetente = banco1.checarConta(contaRemententeDoBanco1);
        let statusDestinatario = banco2.checarConta(contaDestinatarioDoBanco2);
        console.log("Log: Checagem (" + banco1.nome + ", Conta Remetente:" + contaRemententeDoBanco1 + " Status: " + statusRemetente + ")");
        console.log("Log: Checagem (" + banco2.nome + ", Conta Destino:" + contaDestinatarioDoBanco2 + " Status: " + statusDestinatario + ")");

        if (statusDestinatario && statusRemetente) {
            // Checar saldo Remetente.
            if (banco1.transacao(contaRemententeDoBanco1, -valor)) {
                banco2.transacao(contaDestinatarioDoBanco2, valor);
            }            
        }
    }

}

// Teste
const banco1 = new Banco("JWC");
const banco2 = new Banco("Outro");

banco1.abrir(new Conta("Cliente A", 1));
banco1.abrir(new Conta("Cliente B", 10));

banco2.abrir(new Conta("Cliente C", 1000));
banco2.abrir(new Conta("Cliente D", 5000));

console.log("\nExtrato:");
banco1.listar();
banco2.listar();

console.log();
banco1.transacao(-1, 10);
banco1.transacao(1000, 10);
banco1.transacao(1, 100);
banco1.transacao(1, -1000);

console.log("\nExtrato:");
banco1.listar();

console.log("\nTeste Pix");
PIX.transacao(banco2, 0, banco1, 1, 250);
console.log("\nExtrato:");
banco1.listar();
banco2.listar();