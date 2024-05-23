/*
59. Crie um programa/página onde, para você, faz-se necessário o uso de herança.

54. Construa uma página/programa cadastrando cinco funcionários de uma escola, sendo
que dois deles são professores. Todos os funcionários terão cadastrados seus nomes e
salários e, os professores, terão cadastrados a disciplina às quais lecionam.

55. Continuando a atividade anterior, escreva o nome dos funcionários que ganham acima
de R$ 2.000,00.

56. De acordo com a atividade 54, escreva o nome de quem leciona “Matemática”.

57. Continuando na atividade 54, escreva o nome de todos os funcionários e, ao lado dos
professores, adicione a letra P.

58. Ainda sobre a atividade 54, escreva o nome e o salário de todos os funcionários.

60. Ainda sobre a atividade anterior, utilize funções pequenos relatórios sobre os dados
que seriam cadastrados.
*/

/****************************************************************************************
 
    SOLUÇÃO COM MUITAS POSSIBILIDADES!
    IMPORTANTE SEMPRE ANALISAR OS REQUERIMENTOS (PEDIDOS) DO PROGRAMA ANTES DE CODIFICAR!

****************************************************************************************/

class Funcionario {
    constructor(nome, salario) {
        this.nome = nome;
        this.salario = salario;
        this.cargo = "";
    }

    checarSalario(valorLimite) {
        let resposta = "igual a ";
        if (parseFloat(this.salario) < parseFloat(valorLimite)) {
            resposta = "menos que ";
        }
        if (parseFloat(this.salario) > parseFloat(valorLimite)) {
            resposta = "mais que ";
        }

        return "ganha " + resposta + valorLimite;
    }

    exibir() {
        return this.nome + ", " + this.salario;
    }
}

class Professor extends Funcionario {
    constructor(nome, salario, disciplinas) {
        super(nome, salario);
        super.cargo = "Professor";
        // Considerado a lista uma String de disciplinas separadas por vírgula.
        this.disciplinas = disciplinas;
    }

    exibir() {
        return super.exibir() + ", " + this.disciplinas;
    }
}

class Cadastro {

    constructor() {
        this.funcionarios = new Array();
    }

    adicionar(funcionario) {
        this.funcionarios.push(funcionario);
    }

    remover(indice) {
        let i = parseInt(indice);

        // Lembrar: contagem de Array iniciam em Zero!
        if (i < 0 || i > this.funcionarios.length - 1) {
            // Evitar processamento desnecessário.
            return;
        }

        // Copiar excluindo.
        let arrayTemporario = new Array();
        for (let j = 0; j < this.funcionarios.length; j++) {
            if (j != i) {
                arrayTemporario.push(this.funcionarios[j]);
            }
        }
        // Atualizar.
        if (arrayTemporario.length > 0) {
            this.funcionarios = arrayTemporario;
        }
    }

    cadastros() {
        return this.funcionarios.length;
    }

    relatorio() {
        let mensagem = "";
        for (let i = 0; i < this.funcionarios.length; i++) {
            mensagem += "Nome: " + this.funcionarios[i].nome + "\tSalário: " + this.funcionarios[i].salario + "\n";
        }
        return mensagem;
    }
}

// Teste
let escola = new Cadastro();
escola.adicionar(new Funcionario("Funcionario A", 2000.00));
escola.adicionar(new Funcionario("Funcionario B", 2000.50));
escola.adicionar(new Funcionario("Funcionario C", 2200.50));
escola.adicionar(new Professor("Funcionario D", 3000.00, "Matemática, Português"));
escola.adicionar(new Professor("Funcionario E", 3100.00, "Informática, Psicologia"));

console.log(escola.relatorio());
console.log(escola.cadastros());
escola.remover(0);
escola.remover(2); // Lembrar que indices ficam alterados quando há remoção de dado.
console.log(escola.cadastros());
console.log(escola.relatorio());