/*
16. Construa uma página onde o usuário digitará o seu peso e a sua altura e o programa
irá calcular o IMC (peso/altura). Caso o IMC seja maior que 25 exibirá, na tela, “Acima
do Peso Ideal”. Caso contrário, “Peso OK”.

Fonte: https://pt.wikipedia.org/wiki/%C3%8Dndice_de_massa_corporal

    Resultado               Situação
    Abaixo de 17	        Muito abaixo do peso
    Entre 17 e 18,49	    Abaixo do peso
    Entre 18,50 e 24,99	    Peso normal
    Entre 25 e 29,99	    Acima do peso
    Entre 30 e 34,99	    Obesidade I
    Entre 35 e 39,99	    Obesidade II (severa)
    Acima de 40	            Obesidade III (mórbida)
*/

let peso = window.prompt("Digite o seu peso (Kg):");
let altura = window.prompt("Digite a sua altura (m):");
let IMC = parseFloat(peso) / (parseFloat(altura) * parseFloat(altura));

let mensagem = "Peso OK";
if (IMC > 25) {
    mensagem = "Acima do Peso Ideal.";
}

window.alert(mensagem);