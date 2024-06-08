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
 * Função monta uma Tabela genérica via Matriz 2D e altera o HTML Table com Id.
 */
function criarTabela(matriz, id) {
    let linhas = "";
    for (let i = 0; i < matriz.length; i++) {
        linhas += "<tr>\n";
        let tag = i == 0 ? "th" : "td";
        for (let j = 0; j < matriz[i].length; j++) {
            linhas += "<" + tag + ">" + matriz[i][j] + "</" + tag + ">\n";
        }
    }
    // console.log(linhas);
    document.getElementById(id).innerHTML = linhas;  // Atualiza HTML
}

/**
 * Função atualiza dados do HTML Table "menu", calcula o total geral.
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
 * Função de Validação de Cadastro. EXEMPLO!
 */
function validar(nome, endereco, telefone) {

    // Checar se há entradas nulas.
    if (nome == null | endereco == null | telefone == null) {
        return false;
    }

    // Limpar entradas com espaços em branco.
    nome = nome.replace(/\s/g, '');
    endereco = endereco.replace(/\s/g, '');
    telefone = telefone.replace(/\s/g, '');

    // Checar se há entradas vazias.
    if (nome == "" | endereco == "" | telefone == "") {
        return false;
    }

    // Checar entradas com caracteres estranhos.

    /**
    * Função retorna true se texto conter ao menos um caracter diferente da sequência de caracteres.
    */
    let existeCaracteresEstranhos = function (texto, caracteres) {
        for (let i = 0; i < caracteres.length; i++) {
            texto = texto.replaceAll(caracteres[i], '');
        }
        return texto.length > 0;
    }

    // Construção manual.
    const acentos = "`´^~¨";
    const aspasDuplas = "\"";
    const aspasSimples = "'";
    const aspas = aspasSimples + aspasDuplas;
    const asterisco = "*";
    const barra = "/";
    const barraInvertida = "\\";  // barra inversa, contrabarra
    const barras = barra + barraInvertida;
    const parenteses = "()";
    const chaves = "{}";
    const colchetes = "[]";
    const digitos = "01234567890";
    const letras = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const letrasEspeciais = "ãâáàäẽêéèëĩîíìïôõóòöũúùûüçÃÂÁÀÄẼÊÉÈËĨÎÍÌÏÔÕÓÒÖŨÚÙÛÜÇ";
    const somenteLetras = letras + letrasEspeciais;
    const operadorAdicao = "+";
    const operadorSubtracao = "-";
    const operadorMultiplicacao = asterisco;
    const operadorDivisao = barra;
    const operadorIgual = "=";
    const operadorMaior = ">";
    const operadorMenor = "<";
    const operadores = operadorAdicao + operadorSubtracao + operadorMultiplicacao + operadorDivisao + operadorIgual + operadorMaior + operadorMenor;
    const ponto = ".";
    const pontoEvirgula = ";";
    const virgula = ",";
    const doisPontos = ":";
    const exclamacao = "!";
    const interrogacao = "?";
    const pontuacao = ponto + pontoEvirgula + virgula + doisPontos + exclamacao + interrogacao;
    const underline = "_";
    const simbolosGrau = "ºª";
    const simbolosOutros = underline + "|@#$%&¹²³£¢¬§";
    const simbolos = simbolosGrau + simbolosOutros;

    const validos_nomes = aspasSimples + somenteLetras;
    const validos_endereco = validos_nomes + digitos + operadorSubtracao + barra + ponto + pontoEvirgula + virgula + doisPontos + simbolosGrau;
    const validos_telefone = digitos + parenteses + operadorAdicao + operadorSubtracao;

    if (existeCaracteresEstranhos(nome, validos_nomes)) {
        return false;
    }

    if (existeCaracteresEstranhos(endereco, validos_endereco)) {
        return false;
    }

    if (existeCaracteresEstranhos(telefone, validos_telefone)) {
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

function testeValidar() {

    // Teste Nome
    console.assert(validar("", "1", "1") == false);
    console.assert(validar(null, "1", "1") == false);
    console.assert(validar(" ", "1", "1") == false);
    console.assert(validar("Nome1", "1", "1") == false);
    console.assert(validar("Nome@", "1", "1") == false);
    console.assert(validar("Nome -", "1", "1") == false);
    console.assert(validar("Nome ^", "1", "1") == false);
    console.assert(validar("Nome >", "1", "1") == false);
    console.assert(validar("Palhaço", "1", "1") == true);
    console.assert(validar("Específico", "1", "1") == true);
    console.assert(validar("Sant'anna", "1", "1") == true);

    // Teste Endereço
    console.assert(validar("Nome", null, "1") == false);
    console.assert(validar("Nome", " ", "1") == false);
    console.assert(validar("Nome", "Rua @", "1") == false);
    console.assert(validar("Nome", "Rua ?", "1") == false);
    console.assert(validar("Nome", "Rua <", "1") == false);
    console.assert(validar("Nome", "Rua Sant'anna", "1") == true);
    console.assert(validar("Nome", "Apt/01", "1") == true);
    console.assert(validar("Nome", "Apt:01", "+1") == true);
    console.assert(validar("Nome", "Número 10", "1") == true);
    console.assert(validar("Nome", "Nº 10", "1") == true);
    console.assert(validar("Nome", "1ª A", "1") == true);

    // Teste Telefone
    console.assert(validar("Nome", "1", null) == false);
    console.assert(validar("Nome", "1", " ") == false);
    console.assert(validar("Nome", "Rua", "[1]") == false);
    console.assert(validar("Nome", "Rua", "21 91234-1234") == true);
    console.assert(validar("Nome", "Rua", "(21) 91234-1234") == true);
    console.assert(validar("Nome", "Rua", "+55 (021) 91234-1234") == true);

    // Entrada válida possível 
    console.assert(validar("Fulano de Tal", "Rua Abc, nº 100 - Rio de Janeiro; RJ CEP 95244-444", "+55 (21) 91234-1234") == true);

    console.log("Teste finalizado!");
}

// Principal
criarTabela(modelo(), "menu");

// Exemplo de Testes
testeValidar();
