/**
 * Função retorna Lista de Pizzas (Matriz 2D de Objetos).
 */
function dados() {

    const pizzas = [
        { nome: "Calabresa", preco: "1.5", descricao: "Bla bla" },
        { nome: "Catupiry", preco: "1.5", descricao: "Bla bla" },
        { nome: "Choconana", preco: "1.5", descricao: "Bla bla" },
        { nome: "Ninho com nutela", preco: "1.5", descricao: "Bla bla" },
        { nome: "Margarita", preco: "1.5", descricao: "Bla bla" },
        { nome: "Peperone", preco: "1.5", descricao: "Bla bla" },
        { nome: "Chocolate com morango", preco: "1.5", descricao: "Bla bla" }
    ]

    return pizzas;
}

/**
 * Função organiza os dados e retorna uma nova lista (Matriz 2D).
 */
function modelo() {

    let matriz = [
        ["Qtde", "Pizza", "Descrição", "Preço (R$)", "Total (R$)"]
    ];

    const pizzas = dados();
    for (let i = 0; i < dados().length; i++) {
        matriz.push([
            "<input type=\"number\" id=\"qtde_" + i + "\" value=\"0\" min=\"0\" max=\"20\" onclick=\"atualizar()\">",
            pizzas[i].nome, pizzas[i].descricao, pizzas[i].preco,
            "<label id=\"total_" + i + "\">0</label>"]);
    }

    return matriz;
}

/**
 * Função monta uma Tabela via Matriz 2D e altera o HTML Table com Id "menu".
 */
function tabelar(matriz) {
    let linhas = "";
    for (let i = 0; i < matriz.length; i++) {
        linhas += "<tr>\n";
        let tag = i == 0 ? "th" : "td";
        for (let j = 0; j < matriz[i].length; j++) {
            linhas += "<" + tag + ">" + matriz[i][j] + "</" + tag + ">\n";
        }
    }
    // console.log(linhas);
    document.getElementById("menu").innerHTML = linhas;  // Atualiza cardapio.html
}

/**
 * Função atualiza dados do HTML Table, calcula o total geral.
 */
function atualizar() {
    const pizzas = dados();
    let totalGeral = 0;
    for (i = 0; i < pizzas.length; i++) {
        const qtde = document.getElementById("qtde_" + i).value;  // Busca valor no cardapio.html
        const labelText = document.getElementById("total_" + i);  // Busca elemento no cardapio.html
        const calc = parseFloat(qtde) * parseFloat(pizzas[i].preco);
        totalGeral += calc;
        labelText.innerHTML = calc; // Atualiza cardapio.html
    }
    // console.log(totalGeral);
    let texto = "Total Geral: " + totalGeral;
    if (parseFloat(totalGeral) == 0) {
        texto = "";
    }
    document.getElementById("totalGeral").innerHTML = texto;  // Atualiza cardapio.html
}

/**
 * Função de Validação de Cadastro.
 */
function validar(nome, endereco, telefone) {

    // Checar entradas somente com espaços em branco.
    // Usando métodos como Trim, Replace, por exemplo.

    // Checar se há entradas vazias.
    if (nome == "" | endereco == "" | telefone == "") {
        return false;
    }

    // Checar se há entradas nulas.
    if (nome == null | endereco == null | telefone == null) {
        return false;
    }

    // Checar se é tipo String.

    // Checar entradas com caracteres estranhos.

    /**
    * Função retorna true se texto conter ao menos um caracter da sequência de caracteres.
    */
    let checar = function (texto, caracteres) {
        for (let i = 0; i < caracteres.length; i++) {
            for (let j = 0; j < texto.length; j++) {
                if (texto[j] == caracteres[i]) {
                    return true; // Se encontrado.
                }
            }
        }
        return false;
    }

    const acentos = "`´^~¨";
    const aspas = "'\"";
    const barras = "\\/";
    const chaves = "{}";
    const colchetes = "[]";
    const digitos = "01234567890";
    const letras = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const letrasEspeciais = "ãâáàäẽêéèëĩîíìïôõóòöũúùûüçÃÂÁÀÄẼÊÉÈËĨÎÍÌÏÔÕÓÒÖŨÚÙÛÜÇ";
    const operadores = "*-+=";
    const parenteses = "()";
    const pontuacao = ".,;:!?";
    const simbolos = "|@#$%&_ºª¹²³£¢¬§";

    const invalidos_nomes = acentos + barras + chaves + colchetes + digitos + operadores + parenteses + pontuacao + simbolos + "\"";
    const invalidos_endereco = acentos + barras + chaves + colchetes + "*+=" + "!?" + "|@#$%&_¹²³£¢¬§";
    const invalidos_telefone = acentos + aspas + barras + chaves + colchetes + letras + letrasEspeciais + pontuacao + simbolos + "*=";

    if (checar(nome, invalidos_nomes)) {
        console.log("Erro: Nome com caracteres suspeitos.");
        return false;
    }

    if (checar(endereco, invalidos_endereco)) {
        console.log("Erro: Endereço com caracteres suspeitos.");
        return false;
    }

    if (checar(telefone, invalidos_telefone)) {
        console.log("Erro: Telefone com caracteres suspeitos.");
        return false;
    }

    // Validação por contagem de caracteres.
    // Usando a propriedade Length da String.
    
    // Validação por Expressões Regulares.
    // Usando Regex com o método Match, Search.

    return true;
}

function confirmarPedido() {
    const nome = document.getElementById("nome").value;
    const endereco = document.getElementById("endereco").value;
    const telefone = document.getElementById("telefone").value;

    if (validar(nome, endereco, telefone) /* == true */) {
        window.alert("Pedido confirmado!");
    } else {
        window.alert("Verifique os dados!");
    }
}

// Principal
tabelar(modelo());

// Exemplo de Testes
// tabelar([["Campo 1", "Campo 2"], ["Valor 1", "Valor 2"]]);
// console.log(checar("12", "ab")); // Falso.
// validar("abc1", "1", "1");  // Erro no nome.
// validar("abc@", "1", "1");  // Erro no nome.
// validar("ab -", "1", "1");  // Erro no nome.
// validar("ab ´", "1", "1");  // Erro no nome.
// validar("abc", "Rua @", "1");  // Erro no endereço.
// validar("abc", "Rua ?", "1");  // Erro no endereço.
// validar("abc", "Rua <", "1");  // Erro no endereço.
// validar("abc", "Rua 1", "[1]");  // Erro no telefone.
validar("Fulano de Tal", "Rua Abc, nº 100 - Rio de Janeiro; RJ", "+55 (21) 9123-12345"); // Validado.
console.log("Teste Terminado!");
