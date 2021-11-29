<?php
//task 1
echo "task 1<br>";
$a = rand(-10, 10);
echo $a . "<br>";
$b = rand(-10, 10);
echo $b . "<br>";
if ($a >= 0 && $b >= 0) {
    echo "Оба числа положительные<br>Их разность = " . (max($a, $b) - min($a, $b));
} elseif ($a < 0 && $b < 0) {
    echo "Оба числа отрицательные<br>Их произведение = " . $a * $b;
} else {
    echo "Числа разных знаков<br>Их сумма = " . ($a + $b);
}

//task2
echo "<br><br>task 2<br>";
$a = rand(0, 16);
echo "<br>a = " . $a . "<br>";
switch ($a) {
    case 0:
        echo $a++ . "<br>";
    case 1:
        echo $a++ . "<br>";
    case 2:
        echo $a++ . "<br>";
    case 3:
        echo $a++ . "<br>";
    case 4:
        echo $a++ . "<br>";
    case 5:
        echo $a++ . "<br>";
    case 6:
        echo $a++ . "<br>";
    case 7:
        echo $a++ . "<br>";
    case 8:
        echo $a++ . "<br>";
    case 9:
        echo $a++ . "<br>";
    case 10:
        echo $a++ . "<br>";
    case 11:
        echo $a++ . "<br>";
    case 12:
        echo $a++ . "<br>";
    case 13:
        echo $a++ . "<br>";
    case 14:
        echo $a++ . "<br>";
    case 15:
        echo $a++ . "<br>";
        break;
}

//task3
function sum($a, $b)
{
    return $a + $b;
}
function sub($a, $b)
{
    return $a - $b;
}
function mul($a, $b)
{
    return $a * $b;
}
function div($a, $b)
{
    return $a / $b;
}

//task4
echo "<br>task 4<br>";
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "+":
            return sum($arg1, $arg2);
        case "-":
            return sub($arg1, $arg2);
        case "*":
            return mul($arg1, $arg2);
        case "/":
            if (!$arg2) {
                return "Нельзя делить на 0";
            }
            return div($arg1, $arg2);
        default:
            echo "Введён неправильный знак операции";
            break;
    }
}

echo "sum: " . mathOperation(rand(-10, 10), rand(-10, 10), "+") . "<br>";
echo "sub: " . mathOperation(rand(-10, 10), rand(-10, 10), "-") . "<br>";
echo "mul: " . mathOperation(rand(-10, 10), rand(-10, 10), "*") . "<br>";
echo "div: " . mathOperation(rand(-10, 10), rand(-10, 10), "/") . "<br>";

//task6
echo "<br>task 6<br>";
function power($val, $pow)
{
    if (!$pow && !$val) return "Неопределённость";
    elseif (!$val) return 0;
    elseif (!$pow) return 1;
    elseif ($pow < 0) return power(1 / $val, $pow * (-1));
    else return $val * power($val, $pow - 1);
}

echo power(2, rand(-10, 10));

/*
1, 21 час
2-4, 22-4 часа
0, 5-20 часов

1,21,31,41,51 минута
2-4,22-24,32-34,42-44,52-54 минуты
0, 5-20, 25-30 минут
*/

//task7
echo "<br><br>task 7<br>";
$hours = date("H");
$minutes = (int)date("i");
if ($hours >= 5 && $hours <= 20 || $hours == 0) echo "<br>" . $hours . " часов ";
elseif ($hours % 10 >= 2 && $hours % 10 <= 4) echo "<br>" . $hours . " часа ";
else echo "<br>" . $hours . " час ";
if ($minutes == 1 || $minutes == 21 || $minutes == 31 || $minutes == 41 || $minutes == 51) echo $minutes . " минута";
elseif ($minutes % 10 >= 2 && $minutes % 10 <= 4 && ($minutes < 5 || $minutes > 20)) echo $minutes . " минуты";
else echo $minutes . " минут";
