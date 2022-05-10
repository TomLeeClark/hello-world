<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php
session_start();

    $_SESSION['find-name'] = $_POST['find-name'];
    $name_6 = ['Аня'=>'Ильченко', 'Влад'=>'Неильченко','Виталий'=>'Безбородов','Людмила'=>'Василько','Александр'=>'Иванов'];
    $key = array_search(trim($_SESSION['find-name']), $name_6);
    $_SESSION['your-name'] = 'Твоё имя: '.$key;
?>

<div class="container mt-5">
    <h1 style="text-align: center;" class="mt-5">Узнай своё имя</h1>
<form method="post">
    <input type="text" name="find-name" value="<?=$_SESSION['find-name']?>" placeholder="Введите фамилию" class="form-control">
    <div class="text-danger"><?=$_SESSION['error-name']?></div>
        <button type="submit" class="btn btn-success">Поиск</button>
</form>
<?php
    if ($key == "")
        $_SESSION['error-name'] = "Введите существующую фамилию";
    else unset($_SESSION['error-name']);
?>
<h2 style="text-align: center;" class="mt-5"><?=$_SESSION['your-name']?></h2>

<div class="alert alert-success mt-5">
   <div style="text-align: center;"> <b>В этом мире бывают такие фамилии:</b>
<ol>
    <li>Ильченко</li>
    <li>Неильченко</li>
    <li>Безбородов</li>
    <li>Василько</li>
    <li>Иванов</li>
</ol></div>
</div>
    <form>
        <button type="button" onClick='location.href="https://youtu.be/dQw4w9WgXcQ?t?autoplay=1"' class="btn btn-success">Выход</button>
    </form>
</div>
</body>
</html>
