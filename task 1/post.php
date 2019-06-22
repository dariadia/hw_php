<?php
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
    if ($b === '0') {
        return "На 0 делить нельзя!";
    } else {
        return ($a / $b);
    }
}

if (isset($_POST['submit'])) {
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        if ($_POST['operation'] == 'plus') {
            $total = getSum($_POST['number1'], $_POST['number2']);
        }
        if ($_POST['operation'] == 'minus') {
            $total = getSubtraction($_POST['number1'], $_POST['number2']);
        }
        if ($_POST['operation'] == 'multiply') {
            $total = getMultiplication($_POST['number1'], $_POST['number2']);
        }
        if ($_POST['operation'] == 'divided by') {
            $total = getDivision($_POST['number1'], $_POST['number2']);
        }
        echo "<script type='text/javascript'>alert('$total');</script>";
    } else {
        $message = 'Введите значения цифрами!';
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

header( "refresh:0.2; url=index.php" );

die;
