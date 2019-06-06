<meta charset = "utf-8">

<?php

if (isset($_POST['add'])) {
    require_once'db_connect.php';

    $topic = strip_tags(trim($_POST['topic']));
    $content = strip_tags(trim($_POST['content']));
    $date = $_POST['date'];
    $time = $_POST['time'];

    $request = "INSERT INTO story (topic, content, author, topicDate, topicTime)" . "VALUES ('$topic', '$content', '$author', '$topicDate', '$topicTime')";
    $result = mysqli_query($link, $request);
    echo $request;
    if ($result === true) {
        echo 'Сообщение добавлено';
    }

    if ($result !== true) {
        echo 'error';
    }

    mysqli_close($link);

}

