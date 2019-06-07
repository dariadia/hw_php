<?php
echo 'Задание 1'.PHP_EOL;

$a = mt_rand(-100,100);
$b = mt_rand(-100,100);

if ($a >= 0 && $b >= 0) {
    echo 'Разность чисел равна '.($a - $b).PHP_EOL;;
}
elseif ($a < 0 && $b < 0){
    echo 'Произведение чисел равно '.($a * $b).PHP_EOL;;
}
else {
    echo 'Сумма чисел равна '.($a + $b).PHP_EOL;;
}

?>


<?php
$а = mt_rand(0,15);
echo 'Задание 2. Вывод чисел '.PHP_EOL;

switch ($a) {
    case 1 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++; //пока $a не 15 продолжаем проваливаться, иначе выходим
        else {
            break;
        }
    case 2 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 3 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 4 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 5 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 6 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 7 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 8 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 9 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 10 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 11 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 12 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 13 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 14 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 15 :
        echo $a.PHP_EOL;
        if ($a < 15) $a++;
        else {
            break;
        }
    case 16 : echo $a.PHP_EOL;
}

?>


<?php
$a = mt_rand(-100,100);
$b = mt_rand(-100,100);
echo 'Задание 3.'.PHP_EOL.'Ваши числа равны '.$a.', '.$b.PHP_EOL;

function getSum($a, $b) {
    return $a + $b;
}

function getSubtraction($a, $b) {
    return $a - $b;
}

function getMultiplication($a, $b) {
    return $a * $b;
}

function getDivision($a, $b) {
    if ($b === 0) {
        echo 'На 0 делить нельзя!';
    } else {
        return ($a / $b);
    }
    
}

echo 'Сумма равна '.getSum($a, $b).PHP_EOL;
echo 'Разность равна '.getSubtraction($a, $b).PHP_EOL;
echo 'Умножение равно '.getMultiplication($a, $b).PHP_EOL;
echo 'Деление равно '.getDivision($a, $b).PHP_EOL;

?>


<?php
echo 'Задание 4.'.PHP_EOL;

$arg1 = mt_rand(-100,100);
$arg2 = mt_rand(-100,100);
echo 'Ваши числа равны '.$arg1.', '.$arg2.PHP_EOL;
echo mathOperation($arg1, $arg2, 'sum');
echo mathOperation($arg1, $arg2, 'div');
echo mathOperation($arg1, $arg2, 'mult');
echo mathOperation($arg1, $arg2, 'sub');


function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'sum' :
        if ($operation === 'sum') {
            echo 'Сумма равна '.getSum($arg1, $arg2).PHP_EOL;
        }
        break;
        case 'sub' :
        if ($operation === 'sub') {
            echo 'Разность равна '.getSubtraction($arg1, $arg2).PHP_EOL;
        }
        break;
        case 'mult' :
        if ($operation === 'mult') {
            echo 'Умножение равно '.getMultiplication($arg1, $arg2).PHP_EOL;
        }
        break;
        case 'div' :
        if ($operation === 'div') {
            echo 'Деление равно '.getDivision($arg1, $arg2).PHP_EOL;
        }
        break;
    }
}

?>


<?php
echo 'Задание 5. Сдавала на прошлой неделе'.PHP_EOL;
?>

<?php
echo 'Задание 6.'.PHP_EOL;

$val = mt_rand(-100,100);
$pow = mt_rand(-10,10);

$result = power($val, $pow);
echo 'Число '.$val.' в степени '.$pow.' равно '.$result;

function power($val, $pow) {
    if ($pow === 0) {
        return 1;
    }
    if ($pow < 0) {
        return power(1/$val, -$pow); // если степень отрицательная, нужно сменить знак и преобразовать
    }
    return $val * power($val, $pow--);
}

?>


<?php
echo 'Задание 7.'.PHP_EOL;

$time = getdate();
$hour = $time['hours'];
$minutes = $time['minutes'];

switch ($hour) {
    case ($hour === 1 || $hour === 21) :
        $hour_word = ' час';
        break;
    case ($hour > 1 && $hour < 5 || $hour > 21 && $hour < 25) :
        $hour_word = ' часа';
        break;
    case ($hour >= 5 && $hour <= 20) :
        $hour_word = ' часов';
        break;
}

switch ($minutes) {
    case ($minutes === 1 || $minutes > 11 && $minutes % 10 === 1) :
        $minutes_word = ' минута';
        break;
    case ($minutes > 1 && $minutes < 5  || $minutes > 21 && $minutes < 25 || $minutes > 31 && $minutes < 35 || $minutes > 41 && $minutes < 45 || $minutes > 51 && $minutes < 55) :
        $minutes_word = ' минуты';
        break;
    case ($minutes === 0 || $minutes >= 5 && $minutes <= 20 || $minutes >= 25 && $minutes <= 30 || $minutes >= 35 && $minutes <= 40 || $minutes >= 45 && $minutes <= 50 || $minutes >= 55 && $minutes <= 60) :
        $minutes_word = ' минут';
        break;
    
}

echo $hour.$hour_word.' '.$minutes.$minutes_word;

?>