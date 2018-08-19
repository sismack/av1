<?php

	require_once('config.php');
	
	$url = 'info.json'; 
	$json_str = file_get_contents($url); 
	//$obj = json_decode(curl_exec($ch));
	$obj = json_decode($json_str);
	
	echo "<br>";
	echo "<br>";
	echo "Titulo: $obj->titulo<br>"; 
	echo "Autor: $obj->autor<br>"; 
	echo "ISBN13: $obj->isbn13<br>";
	echo "ano: $obj->ano";
	
	echo "<br>";
	echo "<br>";
	
	$queryChecarLivro = "SELECT * FROM livros WHERE isbn13 = '$obj->isbn13' "; 
	$result = mysqli_query($conn, $queryChecarLivro);
	
	if (mysqli_num_rows($result) > 0) {
		echo "Livro ja inserido no banco.";
	} else {
		$queryInsertLivro = "INSERT INTO livros (titulo, autor, isbn13, ano) VALUES ('$obj->titulo', '$obj->autor', '$obj->isbn13', $obj->ano)";
	
		if (mysqli_query($conn, $queryInsertLivro)) {
			echo "Livro inserido com sucesso";
		} else {
		echo "Erro Inserir: " . $queryInsertLivro . "<br>" . mysqli_error($conn);
		}
	}
	
	mysqli_close($conn);

?>

