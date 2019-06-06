<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новая запись</title>
    <!-- Последняя компиляция и сжатый CSS -->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Дополнение к теме -->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Последняя компиляция и сжатый JavaScript -->  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<div class='container'>
    <form method="post" action="db_add.php">
    О чем речь <br>
    <input type="text" name="topic"class="form-control"  /><br>
    <br>

    Подробности <br>
    <textarea color="60" row="10" class="form-control" name="content"></textarea><br>
    <br>

    Кто разузнал <br>
    <input type="text" name="author" class="form-control" /><br>
    <br>

    <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>"/>
    <input type="hidden" name="time" value="<?php echo date('H:i:s'); ?>"/>
    <br>

    <button type="submit" name="save" class="btn btn-primary">Добавим</button>
    <br>
    <br>
    </form>
</div>
</body>
</html>