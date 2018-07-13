<?php
/*
* Funcão para conectar ao banco MySQL
*/
function conectar(){
	$connectstr_dbhost = '';
	$connectstr_dbname = '';
	$connectstr_dbusername = '';
	$connectstr_dbpassword = '';
	foreach ($_SERVER as $key => $value) {
		if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
			continue;
		}
		
		$connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
		$connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
		$connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
		$connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
	}
	$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
	
	if (!$link) {
		echo "Erro: não foi possível conecar ao servidor MySQL." . PHP_EOL;
		echo "Erro Número: " . mysqli_connect_errno() . PHP_EOL;
		echo "Descrição: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}
    
	return $link;
	
}// conectar
?>