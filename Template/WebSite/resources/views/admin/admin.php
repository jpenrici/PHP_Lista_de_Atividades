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
        <form id="search" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Select by:
            <select onchange="onChange()" name="search_id" id="select_id">
                <option value=""></option>
                <option value="users">Users</option>
                <option value="products">Products</option>
            </select>
        </form>
    </div>

    <?php
        if (isset($_POST['search_id'])) {
            $value = $_POST['search_id'];
            if (empty($value)) {
                echo "<p>Select a table to search.</p>";
            } else {
                require_once "../../../database/config/config.php";
                require_once "../../../database/php/db_functions.php";
                require_once "../../php/tableByArray.php";

                // $result = list_all_itens($pdo, $table);
            }

            echo "$value";
        }
    ?>

    <!-- JavaScript -->
    <script>
        function onChange() {
            document.getElementById("search").submit();
        }
    </script>

</body>

</html>