/*
54. Construa uma página/programa cadastrando cinco funcionários de uma escola, sendo
que dois deles são professores. Todos os funcionários terão cadastrados seus nomes e
salários e, os professores, terão cadastrados a disciplina às quais lecionam.

55. Continuando a atividade anterior, escreva o nome dos funcionários que ganham acima
de R$ 2.000,00.

56. De acordo com a atividade 54, escreva o nome de quem leciona “Matemática”.
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

    rencebimento(valorLimite) {
        let resposta = "igual ao";
        if (parseFloat(this.salario) < parseFloat(valorLimite)) {
            resposta = "abaixo do";
        }
        if (parseFloat(this.salario) > parseFloat(valorLimite)) {
            resposta = "acima do";
        }

        return "recebe " + resposta + " valor limite de " + valorLimite;
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

// Organizando com Array inicializado.
let funcionarios = [funcionarios1, funcionarios2, funcionarios3, funcionarios4, funcionarios5];

let mensagem = "";
for (let i = 0; i < funcionarios.length; i++) {
    let busca = "Matemática";
    if ((funcionarios[i].anexo).includes(busca)) {
        mensagem += funcionarios[i].nome + ", leciona " + busca + "\n";
    }
}

// window.alert(mensagem);
console.log(mensagem);