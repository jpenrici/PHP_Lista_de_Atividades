<!-- Atividade Desenvolvida em arquivo único. -->

<!-- "Motor de Cálculo" e Teste -->
<?php

    /* calc.php */

    define('ERROR', 'Erro!'); // constante

    function calc($first, $second, $oper) {
        $result = 0;

        if (empty($first) || empty($second)) {
            return ERROR;
        }

        if (!is_numeric($first) || !is_numeric($second)) {
            return ERROR;
        }

        switch ($oper) {
            case '+':
                $result = $first + $second;
                break;
            case '-':
                $result = $first - $second;
                break;
            case '*':
                $result = $first * $second;
                break;
            case '/':
                if ($second == 0) {
                    $result = ERROR;
                } else {
                    $result = $first / $second;
                }
                break;                                                
            
            default:
                $result = "";
                break;
        }

        return $result;
    }

    /* test_calc.php */

    // Função Teste : Adaptado
    function test($firstNumber, $secondNumber, $operator) {
        $result = calc($firstNumber, $secondNumber, $operator);
        // Exibir no Console da Ferramenta do Desenvolvedor.
        // Substituto do teste usando "php test_calc.php".
        $mesage = "calc($firstNumber, $secondNumber, $operator) = " . $result . "\\n";
        echo "<script>console.log(\"$mesage\");</script>";
    }

    // Testes
    test('10', '10', '+');
    test('10', '10', '-');
    test('10', '10', '*');
    test('10',  '5', '/');
    test('10',  '0', '/');
    test('ab', '10', '+');
    test('10', 'ab', '+');
    test('',   '10', '+');
    test('10',   '', '+');
    test(' ',   ' ', '+');

    // Adaptado
    echo "<script>console.log('Teste finalizado!');</script>";
?>

<!-- webcalc.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Não há redirecionamento feito no index.html -->
    <title>Web Calc PHP</title>

    <!-- CSS -->
    <style>
        
        /* global.css */

        /* Global */
        * {
            box-sizing: border-box;
        }

        :root {
            --white: #ffffff;
            --black: #000000;
            --dark: #2c2c2c;
        }

        /* Theme */
        .light-theme {
            --bg: var(--white);
            --fontColor: var(--black);
            --btnBg: var(--dark);
            --btnFontColor: var(--white);
        }

        .dark-theme {
            --bg: var(--black);
            --fontColor: var(--white);
            --btnBg: var(--white);
            --btnFontColor: var(--dark);
        }

        /* webcalc.css */

        /* Body */
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background: var(--bg);
            background-color: var(--btnFontColor);
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Nav Bar */
        .navbar {
            overflow: hidden;
            background-color: #6a64a0;
        }

        .navbar a {
            float: left;
            display: block;
            color: var(--fontColor);
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a.right {
            float: right;
        }

        .navbar a:hover {
            background-color: var(--bg);
            color: var(--fontColor);
        }

        .navbar .btn {
            float: right;
            text-align: center;
            padding: 14px 20px;
            border-radius: 50%;
            border: none;
            color: var(--btnFontColor);
            background-color: var(--btnBg);
        }

        .navbar img {
            width: 48px;
        }

        .btn:focus {
            outline-style: none;
        }

        h4 {
            padding-left: 8px;
            color: var(--fontColor);
        }

        /* Separator */
        hr.colored {
            border: 10px solid var(--btnBg);
            border-radius: 2px;
        }

        /* calc.css */

        /* Calculator */
        .calc table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
        }

        .calc input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: rgb(66, 58, 85);
            color: white;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
        }

        .calc input[type="text"] {
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            border: 2px solid black;
        }

        .calc button {
            width: 100%;
            padding: 15px;
            background-color: rgb(88, 59, 121);
            color: white;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
        }
    </style>

</head>

<body class="light-theme">

    <!-- header.php -->
     
    <div>
        <div class="navbar">
            <a href="">
                <img src="logo.svg" alt="WebCalc logo"></a>
            <a href="">Home</a>
            <a href="">About</a>
            <button class="btn">Dark</button>
        </div>
        <div>
            <h4>
                <?php
                    date_default_timezone_set("America/Sao_Paulo");
                    echo "Bem-Vindo!<br>Hoje, " . date("d/m/Y");
                ?>
            </h4>
        </div>
    </div>
    <hr class="colored">

    <!-- content.php -->

    <?php
        $result = "";
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="calc">
            <table>
                <tr>
                    <td colspan="5">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $first  = $_POST['number1'];
                            $second = $_POST['number2'];
                            $oper   = $_POST['operator'];
                            $result = calc($first, $second, $oper);
                        }
                    ?>
                        <input type="text" id="result_id" name="result" placeholder="Resultado" readonly
                            value=<?php echo $result; ?>>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <input type="text" id="number1_id" name="number1" placeholder="Primeiro número"
                            style="text-align: end;">
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <input type="text" id="number2_id" name="number2" placeholder="Segundo número"
                            style="text-align: end;">
                    </td>
                </tr>
                <tr>
                    <td style="display: flex" ;>
                        <input type="submit" name="operator" value="+">
                        <input type="submit" name="operator" value="-">
                        <input type="submit" name="operator" value="*">
                        <input type="submit" name="operator" value="/">
                        <button type="button" title="Limpar Números" onclick="clean()">C</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>

    <!-- footer.php -->

    <hr class="colored">

    <!-- JavaScript -->
    <script>
        /* theme.js */
        "use strict";

        // Controla o botão "C" de apagar.
        const switcher = document.querySelector(".btn");

        switcher.addEventListener("click", function() {
            document.body.classList.toggle("dark-theme");

            var className = document.body.className;
            if (className == "light-theme") {
                this.textContent = "Dark";
            } else {
                this.textContent = "Light";
            }
        });

        /* JS interno */

        // Apaga campos da Calculadora.
        function clean() {
            number1_id.value = "";
            number2_id.value = "";
            result_id.value = "";
        }
        
    </script>
</body>

</html>