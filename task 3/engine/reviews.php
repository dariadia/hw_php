<?php

$query = "SELECT * FROM reviews.reviews;";


$result = mysqli_query(myDB_connect(), $query);

$reviews = [];
while ($row = mysqli_fetch_assoc($result)) {
	$reviews[] = $row;
}
