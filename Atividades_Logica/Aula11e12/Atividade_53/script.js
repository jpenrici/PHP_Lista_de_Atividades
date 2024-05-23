/*
53. Construa um programa/página onde o usuário irá criar uma classe com nome, idade e
altura (em centímetros). O programa dirá se a pessoa é maior ou menor de idade.
Faça para cinco usuários.
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

        return this.nome + " tem " + this.idade + " e é " + resposta + " de idade.";
    }
}

// Usando Array de Classes
let usuarios = new Array();
let quantidade = 5;

for (let i = 0; i < quantidade; i++) {
    // Criando usuários com idades aleatórias.
    let idade = Math.floor(Math.random() * 100) + 1;
    const novo = new Usuario("Usuário #" + i, idade, 0 /* altura não será considerada neste teste */);
    usuarios.push(novo);
}

let mensagem = "";
for (let i = 0; i < quantidade; i++) {
    mensagem += usuarios[i].ehMaiorDeIdade() + "\n";
} 

// window.alert(mensagem);
console.log(mensagem);