<?php

$query = "SELECT * FROM products.goods;";


$result = mysqli_query(myDB_connect(), $query);

$products = [];
while ($row = mysqli_fetch_assoc($result)) {
	$products[] = $row;
}
