<?php

$query = "SELECT * FROM products.goods;";


$result = mysqli_query(myDB_connect(), $query);

$goods = [];
while ($row = mysqli_fetch_assoc($result)) {
	$goods[] = $row;
}
