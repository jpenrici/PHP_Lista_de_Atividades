/**
 * Função retorna Lista de Pizzas.
 */
function dados() {
    const pizzas = [
        // ["Pizza", "Descrição", "Preço (R$)"]
        ["Calabresa", "Bla bla", "1.50"],
        ["Catupiry", "Bla bla", "1.50"],
        ["Choconana", "Bla bla", "1.50"],
        ["Ninho com nutela", "Bla bla", "1.50"],
        ["Margarita", "Bla bla", "1.50"],
        ["Peperone", "Bla bla", "1.50"],
        ["Chocolate com morango", "Bla bla", "1.50"]
    ]

    return pizzas;
}

/**
 * Função monta uma tabela específica e altera o HTML Table com Id "menu".
 */
function criarMenu() {
    const pizzas = dados();
    let texto = "<tr><th></th><th>Qtde</th><th>Pizza</th><th>Descrição</th><th>Preço (R$)</th><th>Total (R$)</th>";
    for (i = 0; i < pizzas.length; i++) {
        // Estruturação das linhas da tabela.
        texto += "<tr>\n<td>";
        texto += "<input type=\"checkbox\" id=\"chk_" + i + "\" onclick=\"atualizar()\"></input>";
        texto += "</td>\n<td>";
        texto += "<input type=\"number\" id=\"qtde_" + i + "\" value=\"0\"  min=\"0\" max=\"20\" onclick=\"atualizar()\">";
        texto += "</td>\n";
        for (j = 0; j < pizzas[i].length; j++) {
            texto += "<td>\n" + pizzas[i][j] + "</td>\n";
        }
        texto += "<td>";
        texto += "<label id=\"total_" + i + "\">0.0</label>";
        texto += "</td>\n</tr>\n";
    }
    // console.log(texto);
    document.getElementById("menu").innerHTML = texto;  // Atualização no cardapio.html
}

/**
 * Função atualiza dados do HTML Table, calcula o total geral.
 */
function atualizar() {
    const pizzas = dados();
    let totalGeral = 0;
    for (i = 0; i < pizzas.length; i++) {
        let qtde = document.getElementById("qtde_" + i).value;  // Busca valor no cardapio.html
        let chk = document.getElementById("chk_" + i).checked;  // Busca valor no cardapio.html
        if (chk /* == true */) {
            var labelText = document.getElementById("total_" + i);  // Busca valor no cardapio.html
            let calc = parseFloat(qtde) * parseFloat(pizzas[i][2]);
            totalGeral += calc;
            labelText.innerHTML = calc;
        }
    }
    console.log(totalGeral);
    let texto = "Total Geral: " + totalGeral;
    if (parseFloat(totalGeral) == 0) {
        texto = "";
    }
    document.getElementById("totalGeral").innerHTML = texto;  // Atualização no cardapio.html
}

function validar() {
    // O que devemos validar?

    return true;
}

function confirmarPedido() {
    if (validar() /* == true */) {
        window.alert("Pedido confirmado!");
    }
}

// Principal
criarMenu();