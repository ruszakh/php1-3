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

    <p>Обычный калькулятор</p>

    <form action="/calculator/compute.php" method="get">

        <input type="number" name="first" placeholder="Первое значение">
        <br>
        <select name="act">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="number" name="second" placeholder="Второе значение">
        <br>
        <input type="submit" value="=">

    </form>

    <hr>

    <p>Улучшенный калькулятор</p>

    <?php

    if ( isset($_GET['first'], $_GET['second'], $_GET['act'])) {
        $firstNum = $_GET['first'];
        $secondNum = $_GET['second'];
        $act = $_GET['act'];
    } else {
        $firstNum = null;
        $secondNum = null;
        $act = null;
    }

    function calc($firstNum, $secondNum, $act) {
        switch($act) {
            case '+':
                return ($firstNum + $secondNum);
                break;
            case '-':
                return ($firstNum - $secondNum);
                break;
            case '*':
                return ($firstNum * $secondNum);
                break;
            case '/':
                if ($secondNum != 0) {
                    return ($firstNum / $secondNum);
                    break;
                }
                ?>На ноль делить нельзя!<?php
                break;
            default:
                ?>Неизвестная операция<?php
        }
    }

    assert(11 == calc(5, 6, '+'));
    assert(4 == calc(7, 3, '-'));
    assert(8 == calc(2, 4, '*'));
    assert(3 == calc(15, 5, '/'));
    ?>

    <form action="/calculator/calc.php" method="get">

        <input type="number" name="first" placeholder="Первое значение" value="<?php echo $firstNum; ?>">
        <br>
        <select name="act">
            <option value="+" <?php if ('+' == $act) { ?> selected <?php }; ?>> + </option>
            <option value="-" <?php if ('-' == $act) { ?> selected <?php }; ?>> - </option>
            <option value="*" <?php if ('*' == $act) { ?> selected <?php }; ?>> * </option>
            <option value="/" <?php if ('/' == $act) { ?> selected <?php }; ?>> / </option>
        </select>
        <br>
        <input type="number" name="second" placeholder="Второе значение" value="<?php echo $secondNum; ?>">
        <br>
        <input type="submit" value="=">
        <br>
        <input type="text" placeholder="Результат" value="<?php echo calc($firstNum, $secondNum, $act); ?>">

    </form>

</body>
</html>