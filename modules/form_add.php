<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новая запись</title>
</head>
<body>
    <form method="post" action="db_add.php">
    О чем речь <br>
    <input type="text" name="topic" /><br>
    <br>

    Подробности <br>
    <textarea color="60" row="10" name="content"></textarea><br>
    <br>

    Кто разузнал <br>
    <input type="text" name="author" /><br>
    <br>

    <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>"/>
    <input type="hidden" name="time" value="<?php echo date('H:i:s');?>"/>
    <br>

    <input type="submit" name="add" value="Добавим" />
    <br>
    <br>
    </form>

</body>
</html>