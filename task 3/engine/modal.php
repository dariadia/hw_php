<?php

include './../engine/autoload.php';
autoload('./../config');

if ($_POST['text'] && $_POST['username'] && $_POST['date']) {
	$username = $_POST['username'];
	$text = $_POST['text'];
	$date = $_POST['date'];


	$INSERT_query = sprintf("INSERT INTO reviews.reviews (username, text, date) VALUES (\"%s\", \"%s\", \"%s\")", $username, $text, $date);

	$insert_query = mysqli_query(myDB_connect(), $INSERT_query);
}

header('Location: /index.php');

die;
