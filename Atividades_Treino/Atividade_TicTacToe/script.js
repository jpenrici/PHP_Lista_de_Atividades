// Gameplay

player = 1; // 0 = X, 1 = O, 2 = Indefinido.
symbol = ['X', 'O'];
counter = 0;

matrix = [2, 2, 2, 2, 2, 2, 2, 2, 2]; // 9 "casas", índices de 0 a 8.
validate = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8],  // Horizontal.
    [0, 3, 6], [1, 4, 7], [2, 5, 8],  // Vertical.
    [0, 4, 8], [2, 4, 6]              // Diagonal.
];

function play(value) {

    // Checar se o jogo terminou.
    if (counter >= matrix.length) {
        return;
    }

    // Checar se "casa" já foi preenchida.
    if (matrix[value] != 2) {
        return;
    }

    // Atualizar.
    document.getElementById("btn_" + value).innerHTML = symbol[player]; // informar.
    matrix[value] = player;  // marcar a "casa" do jogador.
    counter++;

    // Log.
    console.log(matrix);
    console.log(player);
    console.log(counter);

    // Regra.
    for (i = 0; i < validate.length; i++) {
        if (matrix[validate[i][0]] == player &&
            matrix[validate[i][1]] == player &&
            matrix[validate[i][2]] == player) {
            document.getElementById('player').innerHTML = "Ganhador: " + symbol[player];
            console.log(player + " ganhou!");
            counter = 2 * matrix.length; // Forçar parada.
            break;
        }
    }

    if (counter < matrix.length) {
        player++; // Trocar jogador.
        player = player % 2; // Sempre 0 ou 1.

        // Jogador atual.
        document.getElementById('player').innerHTML = "Jogador " + symbol[player];
    } else {
        document.getElementById('info').innerHTML = "Clique em F5 para recomeçar!";
        if (counter == 9) {
            document.getElementById('player').innerHTML = "Empate!";
        }
    }

}