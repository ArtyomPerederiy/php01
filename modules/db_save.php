<meta charset = 'utf-8'>

<?php

if (isset($_POST['save'])) {
    require_once'db_connect.php';

    $id = $_POST['id'];
    $topic = strip_tags(trim($_POST['topic']));
    $content = strip_tags(trim($_POST['content']));
    $author = strip_tags(trim($_POST['author']));
    $date = $_POST['date'];
    $time = $_POST['time'];


    $request = "UPDATE story SET topic='$topic', content='$content', author='$author'" . "topicDate = '$date', topiTime ='$time' WHERE id = '$id'";
    $result = mysqli_qury($link, $request);

    if ($result === true) {
        echo 'Сообщение обновлено';
    }

    mysqli_close($link);

}