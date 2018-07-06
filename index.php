<?php
$list = [1 => 'clarinet.jpg', 2 => 'sax.jpg', 3 => 'trombone.jpg', 4 => 'trumpet.jpg'];
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
        img { width: 300px; }
    </style>
</head>
<body>

    <a href="/calculator/calc.php">Калькулятор</a>

    <br>

    <table>
        <tr>
            <?php
                foreach ($list as $key => $value) {
                    ?><td>
                        <a href="/image.php?id=<?php echo $key; ?>">
                            <img src="/images/<?php echo $value; ?>" alt="Wind instrument">
                        </a>
                    </td>
            <?php } ?>
        </tr>
    </table>

</body>
</html>