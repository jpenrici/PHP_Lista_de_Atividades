function dados() {
    const pizzas = [
        ["Pizza", "Descrição", "Preço (R$)"],
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

function criarMenu() {
    const pizzas = dados();
    let texto = "";
    for (i = 0; i < pizzas.length; i++) {
        texto += "<tr>\n<td>";
        texto += i == 0 ? "" : "<input type=\"checkbox\" id=\"chk_" + i + "\" onclick=\"atualizar()\"></input>";
        texto += "</td>\n<td>";
        texto += i == 0 ? "Qtde" : "<input type=\"number\" id=\"qtde_" + i + "\" value=\"0\"  min=\"0\" max=\"20\" onclick=\"atualizar()\">";
        texto += "</td>\n";
        for (j = 0; j < pizzas[i].length; j++) {
            texto += "<td>\n" + pizzas[i][j] + "</td>\n";
        }
        texto += "<td>";
        texto += i == 0 ? "Total" : "<label id=\"total_" + i + "\">0.0</label>";
        texto += "</td>\n</tr>\n";
    }
    // console.log(texto);
    document.getElementById("menu").innerHTML = texto;
}

function atualizar() {
    const pizzas = dados();
    for (i = 1; i < pizzas.length; i++) {
        let qtde = document.getElementById("qtde_" + i).value;
        let chk = document.getElementById("chk_" + i).checked;
        if (chk == true) {
            var labelText = document.getElementById("total_" + i);
            labelText.innerHTML = parseFloat(qtde) * parseFloat(pizzas[i][2]);
        }
    }
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