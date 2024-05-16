/*
37. Construa um programa/página onde o usuário irá digitar seu nome e cidade de onde
está digitando. Essas informações passarão para uma função e, caso a cidade seja
“Rio de Janeiro”, a resposta, além do nome da pessoa, escreverá “Seja Bem-vindo
à Cidade Maravilhosa”. Caso contrário, exibirá apenas o nome e a cidade digitada
(utilizar passagem de parâmetros).
*/

function mensagem(nome, cidade)
{
    if (cidade == "Rio de Janeiro") {
        return  nome + ". Seja Bem-vindo à Cidade Maravilhosa.";
    }
    return nome + ", " + cidade;
}
let nome = window.prompt("Digite o nome:");
let cidade = window.prompt("Digite a cidade:");

window.alert(mensagem(nome, cidade));