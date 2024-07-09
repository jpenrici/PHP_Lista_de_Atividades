<?php
    require_once "calc.php";
    $result = "";
?>

<script>
    function clean() {
        number1_id.value = "";
        number2_id.value = "";
        result_id.value  = "";
    }
</script>

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
                    <input type="text" id="result_id" name="result" placeholder="Resultado" readonly value=<?php echo $result; ?>>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <input type="text" id="number1_id" name="number1" placeholder="Primeiro número" style="text-align: end;">
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <input type="text" id="number2_id" name="number2" placeholder="Segundo número" style="text-align: end;">
                </td>
            </tr>
            <tr>
                <td style="display: flex" ;>
                    <input  type="submit" name="operator" value="+">
                    <input  type="submit" name="operator" value="-">
                    <input  type="submit" name="operator" value="*">
                    <input  type="submit" name="operator" value="/">
                    <button type="button" title="Limpar Números" onclick="clean()">C</button>
                </td>
            </tr>
        </table>
    </div>
</form>
