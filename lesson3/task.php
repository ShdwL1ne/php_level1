<?php

//task1
echo "<br>task 1<br>";
$a = -1;
while ($a++ < 100) {
    if (!($a % 3)) echo $a . ", ";
}

//task2
echo "<br><br>task 2<br>";
do {
    if (!$a) echo $a . " - ноль<br>";
    elseif ($a % 2) echo $a . " - нечётное число<br>";
    else echo $a . " - чётное число<br>";
} while ($a++ < 10);

//task3
echo "<br><br>task 3<br>";
$myArr = ["Московская область" => ["Москва", "Зеленоград", "Клин"], "Ленинградская  область" => ["Санкт-Петербург", "Всеволожск", "Кронштадт"], "Рязанская  область" => ["Касимов", "Михайлов", "Рязань"],];

foreach ($myArr as $reg => $town) {
    print_r("<br>" . $reg . ":<br>");
    echo implode(", ", $town);
}


//task4
echo "<br><br>task 4<br>";
$liter = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ъ' => '"', 'ы' => 'y', 'ь' => "'", 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'];

function transLiter($str)
{
    $str = mb_strtolower($str);
    $str = strtr($str, $GLOBALS['liter']);
    $str[0] = mb_strtoupper($str[0]);
    return $str;
}
echo transLiter("Съешь ещё этих мягких французских булок, да выпей чаю!");


//task5
echo "<br><br>task 5<br>";
function delSpaces($str)
{
    return str_replace(" ", "_", $str);
}
echo delSpaces("Съешь ещё этих мягких французских булок, да выпей чаю!");


//task7
echo "<br><br>task 7<br>";
for ($i = 0; $i < 10; print $i . ", ", $i++);

//task8
echo "<br><br>task 8<br>";
foreach ($myArr as $reg => $town) {
    print_r("<br>" . $reg . ":<br>");
    for ($i = 0; $i < count($town); $i++) {
        if (mb_strtolower(substr($town[$i], 0, 2)) == 'к') echo $town[$i] . " ";
    }
}

//task9
echo "<br><br>task 9<br>";
function urlGen($str)
{
    return delSpaces(transLiter($str));
}
echo urlGen("Съешь ещё этих мягких французских булок, да выпей чаю!");
