/*
59. Crie um programa/página onde, para você, faz-se necessário o uso de herança.

54. Construa uma página/programa cadastrando cinco funcionários de uma escola, sendo
que dois deles são professores. Todos os funcionários terão cadastrados seus nomes e
salários e, os professores, terão cadastrados a disciplina às quais lecionam.
*/

class Funcionario {
    constructor(nome, salario) {
        this.nome = nome;
        this.salario = salario;
    }

    exibir() {
        return this.nome + ", " + this.salario;
    }
}

class Professor extends Funcionario {
    constructor(nome, salario, disciplinas) {
        super(nome, salario);
        // Considerado a lista uma String de disciplinas separadas por vírgula.
        this.disciplinas = disciplinas; 
    }

    exibir() {
        return super.exibir() + ", " + this.disciplinas;
    }
}

// Teste
let funcionarios = new Array();
funcionarios.push(new Funcionario("Funcionario A", 2000.00));
funcionarios.push(new Funcionario("Funcionario B", 2005.50));
funcionarios.push(new Funcionario("Funcionario C", 2005.50));
funcionarios.push(new Professor("Funcionario D", 3000.00, "Matemática, Português"));
funcionarios.push(new Professor("Funcionario E", 3100.00, "Informática, Psicologia"));

let mensagem = "";
for (let i = 0; i < funcionarios.length; i++) {
    mensagem += funcionarios[i].exibir() + "\n";
} 

// window.alert(mensagem);
console.log(mensagem);