<?php

require_once'db_connect.php';

$id = $_GET['id'];

$request = "DELETE FROM story WHERE id = '$id' ";
$result = mysqli_query($link, $request);

if ($result === true) {
    echo 'Сообщение удалено';
}

mysqli_close($link);
