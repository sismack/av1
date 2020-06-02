<?php
	$servername = "localhost";
	$username = "root";
	$password = "123";
	$dbname = "mackenzie";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn) {
		die("Falha ao conectar o banco" . mysqli_connect_error());
}
	
?>