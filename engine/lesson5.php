<?php

$query = "SELECT * FROM lesson5hw.pictures ORDER BY views DESC;";

$result = mysqli_query(myDB_connect(), $query);

$pictures = [];
while ($row = mysqli_fetch_assoc($result)) {
	$pictures[] = $row;
}

