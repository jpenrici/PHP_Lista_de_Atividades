/*
52. Construa um programa/página onde o usuário irá criar uma classe com nome, idade e
altura (em centímetros). O programa dirá se a pessoa é maior ou menor de idade.
*/

class Usuario {
    constructor(nome, idade, alturaEmCentimetros) {
        this.nome = nome;
        this.idade = parseInt(idade);
        this.alturaEmCentimetros = parseFloat(alturaEmCentimetros);
    }

    ehMaiorDeIdade() {
        let resposta = "maior";
        if (this.idade < 18) {
            resposta = "menor";
        }

        return this.nome + " é " + resposta + " de idade.";
    }
}


const novo = new Usuario("Novo Usuário", 21, 180);
const outro = new Usuario("Outro Usuário", 13, 161);

// window.alert(novo.ehMaiorDeIdade());
// window.alert(outro.ehMaiorDeIdade());

console.log(novo.ehMaiorDeIdade());
console.log(outro.ehMaiorDeIdade());