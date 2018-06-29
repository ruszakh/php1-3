<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 1-3</title>
</head>
<body>

    <a href="/index.php">Назад</a>

    <form action="/calculator/compute.php" method="get">

        <input type="number" name="first" placeholder="Первое значение">
        <br>
        <select name="act">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        <br>
        <input type="number" name="second" placeholder="Второе значение">
        <br>
        <input type="submit" value="=">
    </form>

</body>
</html>