<?php

require_once'db_connect.php';

$id = $_GET['id'];

$request = "SELECT * FROM story WHERE id = '$id'";
$result = mysqli_query($limk, $request);

mysqli_close($link);

$news = mysqli_fetch_assoc($result);

    require_once'form_edit.php';
