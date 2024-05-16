/*
19. Construa uma página/programa que exiba, na tela, os números de um a cem.
*/

let mensagem = "Números: ";

for (let i = 1; i <= 100; i++) {
    mensagem += i;
    if (i < 100) {
        mensagem += ",";
    }    
}

// window.alert(mensagem);
console.log(mensagem);