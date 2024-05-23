/*
54. Construa uma página/programa cadastrando cinco funcionários de uma escola, sendo
que dois deles são professores. Todos os funcionários terão cadastrados seus nomes e
salários e, os professores, terão cadastrados a disciplina às quais lecionam.
*/

class Funcionario {
    constructor(nome, salario) {
        this.nome = nome;
        this.salario = salario;
        this.anexo = "";
    }

    ehProfessor(disciplinas) {
        // Considerado a lista uma String de disciplinas separadas por vírgula.
        this.anexo = disciplinas;
    }

    exibir() {
        let resposta = this.nome + ", " + this.salario;
        if (this.anexo.length > 0) {
            resposta += ", " + this.anexo;
        }
        
        return resposta;
    }
}

// Teste
let funcionarios1 = new Funcionario("Funcionario A", 2000.00);
let funcionarios2 = new Funcionario("Funcionario B", 2005.50);
let funcionarios3 = new Funcionario("Funcionario C", 2200.50);

let funcionarios4 = new Funcionario("Funcionario D", 3000.00);
funcionarios4.ehProfessor("Matemática, Português");

let funcionarios5 = new Funcionario("Funcionario E", 3100.00);
funcionarios5.ehProfessor("Informática, Psicologia");

let mensagem = "";
mensagem += funcionarios1.exibir() + "\n";
mensagem += funcionarios2.exibir() + "\n";
mensagem += funcionarios3.exibir() + "\n";
mensagem += funcionarios4.exibir() + "\n";
mensagem += funcionarios5.exibir() + "\n";

// window.alert(mensagem);
console.log(mensagem);