<?php

if ($_SESSION["shopping_cart"]) {
    
$max = count($_SESSION["shopping_cart"]);

for ($count = 0; $count < $max; $count++) {

    $user = $_SESSION["user_name"];
    $item_id = $_SESSION["shopping_cart"][$count]["item_id"];
    $item_name = $_SESSION["shopping_cart"][$count]["item_name"];
    $item_price = $_SESSION["shopping_cart"][$count]["item_price"];
    $item_quantity = $_SESSION["shopping_cart"][$count]["item_quantity"];
    
	$INSERT_query = sprintf("INSERT INTO products.saved (user, item_id, item_name, item_price, item_quantity) VALUES (\"%s\", \"%s\", \"%s\", \"%s\", \"%s\")", $user, $item_id, $item_name, $item_price, $item_quantity);

	$insert_query = mysqli_query(myDB_connect(), $INSERT_query);
}
    
}

?>