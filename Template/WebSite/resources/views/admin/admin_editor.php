<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor</title>
</head>

<body>

    <?php
    $html = "";
    $script = "";
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $value = $_GET['table'];
            if (!empty($id) && !empty($value)) {
                require_once "../../../database/config/config.php";
                require_once "../../../database/php/db_functions.php";
                require_once "../../../database/php/crud_product.php";
                require_once "../../../database/php/crud_user.php";
                require_once "../../php/tableByArray.php";

                $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);
                $result = list_all_itens($pdo, $value);
                $table = [user_attributes_name()];
                if ($value == "product") {
                    $table = [product_attributes_name()];
                }

                $script = "
                    <script>
                        function clean() {
                ";
                foreach ($table[0] as $item) {
                    $script .= $item . "_id.value = \"\";";
                }
                $script .= "}
                    </script>
                ";

                if ($result) {
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        if ($row['id'] == $id) {
                            for ($i = 0; $i < count($table[0]); $i++) {
                                $attribute = $table[0][$i];
                                $attr_value = $row[$attribute];
                                $name = $attribute . "_id";
                                $html .= "
                                    <label for=\"$name\">$attribute</label><br>
                                    <input type='text' name=\"$name\" id=\"$name\" value=\"$attr_value\"
                                ";
                                if ($attribute == 'id') {
                                    $html .= " readonly ";
                                }
                                $html .= "><br>";
                            }
                        }
                    }
                }
            }
        }
    }
    ?>

    <h1>Editor</h1>

    <form action="./admin_update.php" method="POST">
        <input type="hidden" name="table" value=<?php echo "$value"; ?>>
        <input type="submit" value="Atualizar">
        <hr>
        <?php echo $html; ?>
    </form>
    <hr>
    <div>
        <button onclick="clean()">Limpar</button>
        <button onclick="cancel()">Cancelar</button>
    </div>

    <!-- JavaScript -->
    <?php echo $script; ?>
    <script>
        function cancel() {
            window.location.href = "./admin.php";
        }
    </script>
</body>

</html>