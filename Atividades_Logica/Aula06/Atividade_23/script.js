/*
23. Construa uma página/programa que exiba na tela todas as horas possíveis em um dia,
utilizando estrutura de repetição.
*/

let mensagem = "Horas:";
let intervalo = 15;

for(let i = 0; i < 24; i++) {
    for(let j = 0; j < 60; j += intervalo) {
        let hora = i;
        let minuto = j;
        if (i < 10) {
            hora = "0" + hora;
        }
        if (j < 10) {
            minuto = "0" + minuto;
        }
        mensagem += " " + hora + ":" + minuto;
    }
}

// window.alert(mensagem);
console.log(mensagem);