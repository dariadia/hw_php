<?php

function getUser($login)
{

	$query = "SELECT * FROM products.goods;";


	$result = mysqli_query(myDB_connect(), $query);


	$query_auth = sprintf('SELECT * FROM products.user WHERE user_login = "%s" LIMIT 1', $login);

	$mysql_auth = mysqli_query(myDB_connect(), $query_auth);

	$user = NULL;

	$user = mysqli_fetch_assoc($mysql_auth);


	if (!is_null($user))
		return $user;
	return false;
}
