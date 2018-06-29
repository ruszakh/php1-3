<?php
include __DIR__ . '/array.php';
$file = $_GET['id'];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 1-3</title>
    <style>
        img { width: 900px; }
    </style>
</head>
<body>

    <a href="/index.php">Назад</a>
    <br>
    <img src="/images/<?php echo $list[$file]; ?>" alt="Wind instrument">

</body>
</html>