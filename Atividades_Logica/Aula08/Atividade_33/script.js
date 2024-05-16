/*
33. Construa um programa onde o usuário digitará a sua idade. Se a idade for menor de
18 anos, o programa entrará em uma função listando nomes de programas infantis.
Caso seja maior de idade, entrará em uma outra função com lista de carros e seus
respectivos preços.
*/

function listar_programasInfantis() {
  let lista = "";
  for (i = 0; i < 5; i++) {
    lista += "Programa Infantil #" + i + "\n";
  }
  return lista;
}

function listar_carros() {
  let lista = "";
  for (i = 0; i < 5; i++) {
    lista += "Carro #" + i + ", R$ " + (50000 + i * 25.50) + "\n";
  }
  return lista;
}

let idade = window.prompt("Digite a sua idade");
if (idade < 18) {
  window.alert(listar_programasInfantis());
} else {
  window.alert(listar_carros());
}
