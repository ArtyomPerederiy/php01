<?php


$request = 'SELECT * FROM story';

$result = mysqli_query($link, $request);

// close db connection
mysqli_close($link);


while ($news = mysqli_fetch_array($result)) {

    ?>
    <div class="card-body d-flex flex-column align-items-start">
    <h3 class="mb-0"><p class='dark'><?php echo $news['topic'] . '<br>'; ?> </p></h3>
    <p><?php echo $news['content'] . '<br>'; ?></p>
    <p>Дата публикации: <?php echo $news['topicDate'] ?> / <?php echo $news['topicTime'] ?> </p>
    <p>Автор сообщения: <?php echo $news['author'] ?> </p>
    <br>
    <a href="modules/db_delete.php?id=<?php echo $news['id']?>"><button type="button" class="btn btn-danger">Удалить новость</button></a>
    <a href="modules/db_edit.php?id=<?php echo $news['id']?>"><button type="button" class="btn btn-dark">Изменить новость</button></a>
    
    <br>
    <br>
    </div>
    <?php

}

?>