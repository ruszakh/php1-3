<?php

$firstNum = $_GET['first'];
$secondNum = $_GET['second'];

if (
    !isset($firstNum) ||
    !isset($secondNum) ||
    !is_numeric($firstNum) ||
    !is_numeric($secondNum) ||
    empty($_GET['act'])
) {
    ?>Некорректные параметры
    <br>
    <a href="/calculator/calc.php">Назад</a>
    <?php die;
}

switch($_GET['act']) {
    case '+':
        echo ($firstNum + $secondNum);
        break;
    case '-':
        echo ($firstNum - $secondNum);
        break;
    case '*':
        echo ($firstNum * $secondNum);
        break;
    case '/':
        if ($secondNum != 0) {
            echo ($firstNum / $secondNum);
            break;
        }
        ?>На ноль делить нельзя!<?php
        break;
    default:
        ?>Неизвестная операция<?php
}
?>

<br>
<a href="/calculator/calc.php">Назад</a>