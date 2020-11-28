<?php

if (isset($_POST['logout'])) {
	session_start();
	session_destroy();
	//header('Location: '.$_SERVER['REQUEST_URI']);
	header('location: /index.php');
	die;
}