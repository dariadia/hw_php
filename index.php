<?php

echo 'Задание 1.'.PHP_EOL;
$max = 100;
$i = 0;
while ($i <= $max) {
    if ($i % 3 === 0){
        echo $i.PHP_EOL;
    }
   $i++;
}


echo PHP_EOL.'Задание 2.'.PHP_EOL;
$max = 10;
$i = 0;

do {
    if ($i === 0){
        echo $i.' - это ноль'.PHP_EOL;
    } elseif ($i % 2 === 0){
        echo $i.' - это чётное число'.PHP_EOL;
    } else {
        echo $i.' - это нечётное число'.PHP_EOL;
    }
    $i++;
} while($i <= $max);


echo PHP_EOL.'Задание 3.'.PHP_EOL;

$array_cities = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Касимов", "Скопин"],
];

foreach ($array_cities as $key => $value) {
    echo $key.': '.PHP_EOL;
    for ($i = 0; $i < count($array_cities); $i++) {
        if ($i === count($array_cities) - 1) { //если последний город области, не ставим запятую
            echo $value[$i].'.'.PHP_EOL;
        } else {
            echo $value[$i].', ';
        }
    }
}


echo PHP_EOL.'Задание 4.'.PHP_EOL;

$target_string = 'Привет мир';
$result = NULL;
$tr_keys = [
    "a" => "a", "б" => "b", "в" => "v", 
    "г" => "g", "д" => "d", "е" => "ye",
    "ж" => "zh", "з" => "z", "и" => "i",
    "й" => "y", "к" => "k", "л" => "l",
    "м" => "m", "н" => "n", "о" => "o",
    "п" => "p", "р" => "r", "с" => "s",
    "т" => "t", "у" => "u", "ф" => "f",
    "х" => "kh", "ц" => "ts", "ч" => "ch",
    "ш" => "sh", "щ" => "shch", "ы" => "y",
    "э" => "e", "ю" => "yu", "я" => "ya",

    "А" => "A", "Б" => "B", "В" => "V",
    "Г" => "G", "Д" => "D", "E" => "E",
    "Ж" => "Zh", "З" => "Z", "И" => "I",
    "Й" => "Y", "К" => "K", "Л" => "L",
    "М" => "M", "Н" => "N", "О" => "O",
    "П" => "P", "Р" => "R", "С" => "S",
    "Т" => "T", "У" => "U", "Ф" => "F",
    "Х" => "H", "Ц" => "C", "Ч" => "Ch",
    "Ш" => "Sh", "Щ" => "Sch", "Ы" => "Y", 
    "Э" => "E",   "Ю" => "Yu",  "Я" => "Ya",
];

function translit($string, $keys) {
    return strtr($string, $keys);
}

$result = translit($target_string, $tr_keys);
echo $result.PHP_EOL;


echo PHP_EOL.'Задание 5.'.PHP_EOL;

function underscore($string) {
    return str_replace(' ', '_', $string);
}

$result = underscore('Привет мир и все');
echo $result.PHP_EOL;


echo PHP_EOL.'Задание 6.'.PHP_EOL;

$months = [
    "Январь", "Февраль", "Март", "Апрель","Май","Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"
];
?>
<ul>
    <?php foreach ($months as $key => $value) :?>
    <li>Месяц <?=$key?> - <?=$value?> <br/></li>
    <?php endforeach;?>
</ul>

<?php
echo PHP_EOL.'Задание 7.'.PHP_EOL;
$max_num = 10;
for ($i = 0; $i < $max_num; print $i, $i++){
    // здесь пусто
}


echo PHP_EOL.'Задание 8.'.PHP_EOL;
echo 'Города на К. '.': '.PHP_EOL;
foreach ($array_cities as $key => $value) {
    for ($i = 0; $i < count($array_cities); $i++) {
        if (mb_substr($value[$i], 0, 1,"utf-8") === 'К') {
            echo $value[$i].PHP_EOL;
        }
    }
}

echo PHP_EOL.'Задание 9.'.PHP_EOL;
function translit_underscore($string, $keys) {
    $url = translit($string, $keys);
    $url = underscore($url);
    return $url;
}

$url_new = translit_underscore($target_string, $tr_keys);
echo $url_new.PHP_EOL;

?>