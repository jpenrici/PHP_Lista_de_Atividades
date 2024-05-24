// Data
var cell = new Array(10);
var gameover = false;
var winner = false;
cell.fill(0);

// Gameplay
function play(num) {
    if (!gameover) {
        if (cell[num] > 0) {
            window.alert("Cell filled! Try again!");
        } else {
            update(num);
        }
    }
}

function update(num) {
    // Player
    var player = (cell[0] % 2) + 1;
    cell[num] = player;

    // Table
    document.getElementById("cell0" + num).style.backgroundColor = (player == 1 ? 'green' : 'yellow');

    // Game
    cell[0]++;
    console.log(cell);

    var test = [
        [1, 2, 3], [4, 5, 6], [7, 8, 9],    // horizontal
        [1, 4, 7], [2, 5, 8], [3, 6, 9],    // vertical
        [1, 5, 9], [3, 5, 7]                // diagonal
    ]

    for (let i = 0; i < test.length; i++) {
        if (player == cell[test[i][0]] && player == cell[test[i][1]] && player == cell[test[i][2]]) {
            console.log('winner', player, test[i]);
            gameover = true;
            winner = true;
            break;
        }
    }

    if (winner) {
        document.getElementById("player").innerHTML = "Winner is " + player + "!";
        document.getElementById("info").innerHTML = "Press F5 to try again!";
    } else {
        if (cell[0] == 9) {
            document.getElementById("player").innerHTML = "We don't have a winner!";
            document.getElementById("info").innerHTML = "Press F5 to try again!";
            gameover = true;
        } else {
            document.getElementById("player").innerHTML = "Waiting for Player " + ((cell[0] % 2) + 1) + "!";
        }
    }
}