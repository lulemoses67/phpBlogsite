<?php

// connect to databases
$conn = mysqli_connect('localhost','moses','lastking7','hultech');

if (!$conn) {
	echo "connection error" . mysqli_connect_error();
}
 
?>