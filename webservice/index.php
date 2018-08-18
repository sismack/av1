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
	
	$queryChecaarLivro = "SELECT * FROM livros WHERE isbn13 = $obj->isbn13 "; 
	
	if (mysqli_query($conn, $queryChecaarLivro)) {
		echo "Livro já inserido no banco.";
	} else {
		$queryInsertLivro = "INSERT INTO livros (titulo, autor, isbn13, ano) VALUES ('$obj->titulo', '$obj->autor', '$obj->isbn13', $obj->ano)";
	
		if (mysqli_query($conn, $queryInsertLivro)) {
			echo "Livro Inserido com sucesso";
		} else {
		echo "Erro Inserir: " . $queryInsertLivro . "<br>" . mysqli_error($conn);
		}
	}
	
	mysqli_close($conn);

?>

