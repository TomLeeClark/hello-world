<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>
<form method="post">
    <input type="text" name="find-name" placeholder="Введите фамилию">
    <button type="submit">Поиск</button>
</form>
<?php
echo '<br>';
    $name_6 = ['Аня'=>'Ильченко', 'Влад'=>'Неильченко','Виталий'=>'Безбородов','Людмила'=>'Василько','Александр'=>'Иванов'];
    $key = array_search($_POST['find-name'], $name_6);
    echo $key;
?>
</body>
</html>
