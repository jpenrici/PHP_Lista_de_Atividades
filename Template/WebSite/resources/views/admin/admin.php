<?php
$html = "";
if (isset($_GET['search_id'])) {
    $value = $_GET['search_id'];
    if (!empty($value)) {
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
        if ($result) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $id = $row['id'];
                $commands = "<img src='../../images/icons/svg/edit.svg' alt='Editar' title='Editar' width='32px' onclick='redirect($id, \"$value\", true)'>
                    <img src='../../images/icons/svg/delete.svg' alt='Excluir' title='Excluir' width='32px' onclick='redirect($id, \"$value\", false)'>";
                $currentRow = [];
                for ($i = 0; $i < count($table[0]); $i++) {
                    $currentRow[$i] = $row[$table[0][$i]];
                    array_push($currentRow, $commands);
                }
                array_push($table, $currentRow);
            }
        }
        array_push($table[0], "Actions");
        $html = tableByArray($table);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>

    <h1>Administração de Dados</h1>
    <a href="logout.php">Home</a>
    <hr>

    <div>
        <form id="search" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            Select by:
            <select onchange="this.form.submit()" name="search_id" id="select_id">
                <option value=""></option>
                <option value="user">Users</option>
                <option value="product">Products</option>
            </select>
        </form>
    </div>

    <?php
    echo $html;
    ?>

    <!-- JavaScript -->
    <script>
        function redirect(id, value, status) {
            if (status) {
                window.location.href = "./admin_editor.php?id=" + id + "&table=" + value;
            } else {
                window.location.href = "./admin_del.php?id=" + id + "&table=" + value;
            }
        }
    </script>

</body>

</html>