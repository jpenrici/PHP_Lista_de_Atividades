<?php
    function table($rows, $columns)
    {
        $html = "<table>";
        for ($r = 0; $r < $rows; $r++) {
            $html .= "<tr>";
            for ($c = 0; $c < $columns; $c++) {
                $index = $r * $columns + $c;
                $button = "<button id='btn_$index' onclick='play($index)'></button>";
                $html .= "<td> $button </td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";

        return $html;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1>Tic Tac Toe</h1>
    <h3 id="player">Waiting for Player!</h3>

    <?php
        echo table(3, 3);
    ?>

    <h3 id="info"></h3>

    <!-- JavaScript -->
    <script src="script.js"></script>

</body>

</html>