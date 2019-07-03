<?php

/*setcookie('isAuth2', 'true', time()+10000);

print_r($_COOKIE);

if ($_COOKIE['isAuth2']) {
	echo 'Вы авторизованы!';
}
*/

$options= [
	'cookie_lifetime' => 24*60*60,
//	'read_and_close' => true
];

session_start($options);

//$_SESSION['name'] = 'Foma';
//$_SESSION['age'] = '33';

//print_r($_COOKIE);
//print_r($_SESSION);
//session_destroy();
session_write_close();

/*
if (password_verify($passwordFromPOST, $hashFromDB))
	echo 'Пароль верный!';
else
	echo 'Пароль неверный';*/

