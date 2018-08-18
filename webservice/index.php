<?php

	require_once('config.php');
	require_once('info.json');
	
	$url = 'info.json'; 
	$json_str = file_get_contents($url); 
	$obj = json_decode($json_str);
	
	echo "<br>";
	echo "<br>";
	echo "Titulo: $obj->titulo<br>"; 
	echo "Autor: $obj->autor<br>"; 
	echo "ISBN13: $obj->isbn13<br>";
	echo "ano: $obj->ano";
	
	echo "<br>";
	echo "<br>";
	
	$query = "INSERT INTO livros (titulo, autor, isbn13, ano) VALUES ('$obj->titulo', '$obj->autor', '$obj->isbn13', $obj->ano)";
	
	if (mysqli_query($conn, $query)) {
		echo "Livro Inserido com sucesso";
	} else {
		echo "Error: " . $query . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);

?>

