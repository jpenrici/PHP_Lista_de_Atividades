<!--
        Requerimento:

            Ambiente Localhost.

        Fontes úteis:
            https://www.php.net/docs.php
            https://www.w3schools.com/php/default.asp
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <h1>Desafio Árvore</h1>

    <!--
        Exemplo: AlturaDaCopa = 5, AlturaDoTronco = 2.

                       *       
                      ***  
                     *****
                    *******
                   ********* 
                      ***
                      ***
    -->
    <?php
        // Entradas
        $alturaDaCopa   = 13;
        $alturaDoTronco = 5;
        
        // Construção
        $copa = "";
        $tronco = "";
        for ($i=0; $i < $alturaDaCopa; $i++) { 
            $copa .= str_repeat(" ", $alturaDaCopa - $i);
            $copa .= str_repeat("*", $i) . "*" . str_repeat("*", $i) . "\n";
            if ($i < $alturaDoTronco) {
                $tronco .= str_repeat(" ", $alturaDaCopa - 1);
                $tronco .= str_repeat("*", 3) . "\n";
            }
        }

        // Exibição
        echo "Altura da Copa: " . $alturaDaCopa . "<br>";
        echo "Altura do Tronco: " . $alturaDoTronco . "<br>";
        echo "<hr>";
        echo "<pre style=\"color: green; margin: 0px;\">" . $copa . "</pre>";
        echo "<pre style=\"color: brown; margin: 0px;\">" . $tronco . "</pre>";
        echo "<hr>";
    ?>

</body>

</html>