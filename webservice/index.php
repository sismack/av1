<?php

	require_once('config.php');
	require_once('info.json');
	
	$obj = json_decode($json_str);

	echo "Titulo: $obj->titulo<br>"; 
	echo "Autor: $obj->autor<br>"; 
	echo "ISBN13: $obj->isbn13<br>"
	echo "ano": $obj->ano;
	
	mysql_query("INSERT INTO livros (titulo, autor, isbn13, ano) VALUES ($obj->titulo, $obj->autor, $obj->isbn13, $obj->ano)");

?>

