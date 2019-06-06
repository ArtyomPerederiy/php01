<?php


$request = 'SELECT * FROM story';

$result = mysqli_query($link, $request);

// close db connection
mysqli_close($link);


while ($news = mysqli_fetch_array($result)) {

    ?>

    <p><?php echo $news['topic'] . '<br>'; ?> </p>
    <p><?php echo $news['content'] . '<br>'; ?></p>
    <p>Дата публикации: <?php echo $news['topicDate'] ?> / </p>
    <p>Автор сообщения: <?php echo $news['author'] ?> </p>
    <br>
    <a href="module/db_delete.php ? id=<?php echo $news['id']?>">Удалить новость</a>
    <a href="module/db_edit.php ? id=<?php echo $news['id']?>">Изменить новость</a>

    <br>
    <br>
    <?php

}

?>