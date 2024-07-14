<?php

require_once 'db_functions.php';

function create_post($database, $author, $title, $description, $image)
{
    $result = null;

    // Checar entradas.
    if (is_null_or_empty($database)) {
        return false;
    }

    if (is_null_or_empty([$author, $title, $description])) {
        return false;
    }

    $image = (empty($image) || is_null($image)) ? "No image": $image;

    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

    // Criar.
    $sql = "INSERT INTO `posts` (`id`, `author`, `title`, `description`, `image`, `createdAt`, `updatedAt`) ";
    $sql .= "VALUES (NULL, '" . $author . "', '" . $title . "', '" . $description . "', '" . $image . "', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
    $result = command($pdo, $sql);

    // Desconectar.
    $pdo = null;

    return !is_null($result);
}

function read_post_by_author($database, $author)
{
    $result = null;

    // Checar entradas.
    if (is_null_or_empty($database)) {
        return null;
    }

    if (is_null_or_empty($author)) {
        return null;
    }

    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

    // Procurar.
    $sql = "SELECT * FROM `posts` WHERE `author` = '" . $author . "';";
    $result = command($pdo, $sql);

    // Desconectar.
    $pdo = null;

    return $result;
}

function read_post_by_id($database, $id)
{
    $result = null;

    // Checar entradas.
    if (is_null_or_empty($database)) {
        return null;
    }

    if (is_null_or_empty($id)) {
        return null;
    }

    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

    // Procurar.
    $sql = "SELECT * FROM `posts` WHERE `id` = '" . $id . "';";
    $result = command($pdo, $sql);

    // Desconectar.
    $pdo = null;

    return $result;
}

function update_post_by_id($database, $id, $author, $title, $description, $image)
{
    $result = null;

    // Checar entradas.
    if (is_null_or_empty($database)) {
        return false;
    }

    if (is_null_or_empty($id)) {
        return false;
    }

    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

    // Procurar.
    $result = find_by_id($pdo, 'posts', $id);
    if ($result) {
        // Atualizar.
        $data = $result->fetch(PDO::FETCH_ASSOC);
        $new_author = (empty($author) || is_null($author)) ? $data['author'] : $author;
        $new_title = (empty($title) || is_null($title)) ? $data['title'] : $title;
        $new_description = (empty($description) || is_null($description)) ? $data['post'] : $description;
        $new_image = (empty($image) || is_null($image)) ? $data['image'] : $image;

        $sql = "UPDATE `posts` SET `author` = '" . $new_author . "', `title` = '" . $new_title;
        $sql .= "', `description` = '" . $new_description . "', `image` = '" . $new_image . "' ";
        $sql .= ", `updatedAt` = CURRENT_TIMESTAMP WHERE `posts`.`id` = '" . $id . "';";
        $result = command($pdo, $sql);
    }

    // Desconectar.
    $pdo = null;

    return !is_null($result);
}

function delete_post_by_id($database, $id)
{
    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

    return delete_by_id($pdo, 'posts', 'id', $id);
}

function list_all_posts($database)
{
    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

    return list_all_itens($pdo, 'posts');
}

// crud_blog.php