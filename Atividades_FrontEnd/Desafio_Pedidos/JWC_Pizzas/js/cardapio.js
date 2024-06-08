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
 * Função monta uma Tabela genérica via Matriz 2D e altera o HTML Table pelo Id.
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
 * Retorna lista de pedido.
 */
function atualizar() {
    const pizzas = dados();
    let totalGeral = 0;
    let pedido = "";
    for (i = 0; i < pizzas.length; i++) {
        const qtde = document.getElementById("qtde_" + i).value;  // Busca valor no cardapio.html
        const labelText = document.getElementById("total_" + i);  // Busca elemento no cardapio.html
        const calc = parseFloat(qtde) * parseFloat(pizzas[i].preco);
        totalGeral += calc;
        labelText.innerHTML = calc; // Atualiza cardapio.html
        if (parseFloat(qtde) > 0) {
            pedido += qtde + " pizza(s) " + pizzas[i].nome + "\n";
        }
    }
    // console.log(totalGeral);
    let texto = "";
    if (parseFloat(totalGeral) > 0) {
        texto = "Total Geral: " + totalGeral;
        pedido += texto + "\n";
    }
    document.getElementById("totalGeral").innerHTML = texto;  // Atualiza cardapio.html

    return pedido;
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
    let padrao = /\s/g; // Expressão regular literal.
    nome = nome.replace(padrao, '');
    endereco = endereco.replace(padrao, '');
    telefone = telefone.replace(padrao, '');

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
    if (telefone.length < 9 || telefone.length > 20) {
        return false;
    }

    // Validação por Expressões Regulares.
    // Usando Regex com o método Test, Match, Search.

    // Telefone 1: +55(021)12345-1234
    padrao = /^\+[0-9]+\([0-9]+\)[0-9]+\-[0-9]+$/g;
    let count = padrao.test(telefone);

    // Telefone 2: +5502112345-1234
    padrao = /^\+[0-9]+\-[0-9]+$/g;
    count += padrao.test(telefone);

    // Telefone 3: +55021123451234
    padrao = /^\+[0-9]+[0-9].$/g;
    count += padrao.test(telefone);    

    // Telefone 4: (21)12345-1234
    padrao = /^\([0-9]+\)[0-9]+\-[0-9]+$/g;
    count += padrao.test(telefone);

    // Telefone 5: (21)123451234
    padrao = /^\([0-9]+\)[0-9]+$/g;
    count += padrao.test(telefone);

    // Telefone 6: 2112345-1234
    padrao = /^[0-9]+\-[0-9]+$/g;
    count += padrao.test(telefone);

    // Telefone 7: 123451234
    padrao = /^[0-9]+[0-9].$/g;
    count += padrao.test(telefone);

    // console.log(telefone, count);
    if (count < 1) {
        // Se nenhum dos padrões foi encontrado.
        return false;
    }

    return true;
}

function confirmarPedido() {
    const nome = document.getElementById("nome").value;
    const endereco = document.getElementById("endereco").value;
    const telefone = document.getElementById("telefone").value;
    const formadepagamento = document.querySelector('input[name="formadepagamento"]:checked').value;

    let pedido = atualizar();
    if (pedido == "") {
        window.alert("Nenhum pedido foi feito!");
        return;
    }

    if (validar(nome, endereco, telefone) /* == true */) {
        if (pedido != "") {
            pedido += nome + "\nLocal:" + endereco + "\nTel:" + telefone + "\nPago via:" + formadepagamento;
            console.log(pedido);
        }
        window.alert("Pedido confirmado!");
    } else {
        window.alert("Verifique os dados!");
    }
}

function testeValidar() {

    // Dados validos.
    let nome = "nome";
    let endereco = "endereço";
    let tel = "012345679";

    // Teste Nome
    console.assert(validar("", endereco, tel) == false);
    console.assert(validar(null, endereco, tel) == false);
    console.assert(validar(" ", endereco, tel) == false);
    console.assert(validar("Nome1", endereco, tel) == false);
    console.assert(validar("Nome@", endereco, tel) == false);
    console.assert(validar("Nome -", endereco, tel) == false);
    console.assert(validar("Nome ^", endereco, tel) == false);
    console.assert(validar("Nome >", endereco, tel) == false);
    console.assert(validar("Palhaço", endereco, tel) == true);
    console.assert(validar("Específico", endereco, tel) == true);
    console.assert(validar("Sant'anna", endereco, tel) == true);

    // Teste Endereço
    console.assert(validar(nome, null, tel) == false);
    console.assert(validar(nome, " ", tel) == false);
    console.assert(validar(nome, "Rua @", tel) == false);
    console.assert(validar(nome, "Rua ?", tel) == false);
    console.assert(validar(nome, "Rua <", tel) == false);
    console.assert(validar(nome, "Rua Sant'anna", tel) == true);
    console.assert(validar(nome, "Apt/01", tel) == true);
    console.assert(validar(nome, "Apt:01", tel) == true);
    console.assert(validar(nome, "Número 10", tel) == true);
    console.assert(validar(nome, "Nº 10", tel) == true);
    console.assert(validar(nome, "1ª A", tel) == true);

    // Teste Telefone
    console.assert(validar(nome, endereco, null) == false);
    console.assert(validar(nome, endereco, " ") == false);
    console.assert(validar(nome, endereco, "[1]") == false);
    console.assert(validar(nome, endereco, "21 91234 - 1234") == true);
    console.assert(validar(nome, endereco, "( 21) 91234 - 1234") == true);
    console.assert(validar(nome, endereco, "( 21) 91234   1234") == true);
    console.assert(validar(nome, endereco, "+55 (021) 91234 - 1234") == true);
    console.assert(validar(nome, endereco, "+55 021 91234 - 1234") == true);
    console.assert(validar(nome, endereco, "+55 021 91234 1234") == true);

    // Entrada válida possível 
    console.assert(validar("Fulano de Tal", "Rua Abc, nº 100 - Rio de Janeiro; RJ CEP 95244-444", "+55 (21) 91234-1234") == true);

    console.log("Teste finalizado!");
}

// Exemplo de Testes
testeValidar();

// Principal
criarTabela(modelo(), "menu");
